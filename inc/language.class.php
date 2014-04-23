<?php
	class LanguageManager {
		private	$languageDirectory,
				$defaultLanguage;

		public function __construct($languageDirectory, $defaultLanguage) {
			$this->languageDirectory = $languageDirectory;
			$this->defaultLanguage = $defaultLanguage;
		}

		public function includeLanguage($language = null) {
			$language = ($language && $this->isValidLanguage($language)) ? $language : $this->getUserLanguage();

			if(!$this->checkCookie($language)) {
				$this->createCookie($language);
			}
			
			return $this->languageDirectory . '/' . $this->formatLanguageFileName($language);
		}

		public function printLanguageOptions() {
			$optionsString = '';
			foreach($this->getLanguages() as $language) {
				$optionsString .= "<option id='" . $language . "' value='" . $language . "' " . ($language == $this->getUserLanguage() ? 'selected' : '') . ">&nbsp;</option>\n";
			}
			
			return $optionsString;
		}
			
		private function getLanguages() {
			$languages = array();
			foreach(scandir($this->languageDirectory) as $language) {
				$language = $this->formatLanguageName($language);
				if($this->isValidLanguage($language)) {
					$languages[] = $language;
				}
			}
			
			return $languages;
		}

		private function getUserLanguage() {
			if(isset($_GET["lang"]) && $this->isValidLanguage($_GET["lang"])) {
				$language = $_GET["lang"];
			} else if(isset($_COOKIE["lang"]) && $this->isValidLanguage($_COOKIE["lang"])) {
				$language = $_COOKIE["lang"];
			} else if($this->isValidLanguage(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5))) {
				$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
			} else if($this->isValidLanguage(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))) {
				$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			} else {
				$language = $this->defaultLanguage;
			}

			return strtolower($language);
		}

		private function checkCookie($language) {
			return (isset($_COOKIE['lang']) && $_COOKIE['lang'] == $language);
		}
		
		private function createCookie($language) {
			setcookie("lang", $language, time()+31536000);
			header("Location: ".strtok($_SERVER['REQUEST_URI'], '?'));
		}

		private function isValidLanguage($language) {
			$languageFile = $this->formatLanguageFileName($language);
			return (file_exists($this->languageDirectory . '/' . $languageFile) && is_file($this->languageDirectory . '/' . $languageFile) && preg_match("/^([a-z-]{2,5})$/i", $language));
		}
		
		private function formatLanguageFileName($language) {
			return $language . '.php';
		}
		
		private function formatLanguageName($language) {
			return str_replace('.php', '', $language);
		}
	}