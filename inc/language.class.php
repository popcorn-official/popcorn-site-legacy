<?php
	class LanguageManager {
		private	$languageDirectory,
				$defaultLanguage;

		public function __construct($languageDirectory, $defaultLanguage) {
			$this->setLanguageDirectory($languageDirectory);
			$this->setDefaultLanguage($defaultLanguage);
		}
		
		public function getLanguageDirectory() {
			return $this->languageDirectory;
		}
		private function setLanguageDirectory($languageDirectory) {
			$this->languageDirectory = $languageDirectory;
		}

		public function getDefaultLanguage() {
			return $this->defaultLanguage;
		}
		private function setDefaultLanguage($defaultLanguage) {
			$this->defaultLanguage = $defaultLanguage;
		}

		public function includeLanguage($language = null) {
			$language = ($language && $this->isValidLanguage($language)) ? $language : $this->getUserLanguage();

			if(!$this->checkCookie($language)) {
				$this->createCookie($language);
			}
			
			return $this->getLanguageDirectory() . '/' . $this->formatLanguageFileName($language);
		}

		public function printLanguageOptions() {
			$optionsString = '';
			foreach($this->getLanguages() as $language) {
				$optionsString .= "<option id='"  . $language . "' value='" . $language . "' " . ($language == $this->getUserLanguage() ? 'selected' : '') . ">&nbsp;</option>\n";
			}
			
			return $optionsString;
		}
			
		private function getLanguages() {
			$languages = array();
			foreach(scandir($this->getLanguageDirectory()) as $language) {
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
			} else {
				$language = $this->getDefaultLanguage();
			}

			return $language;
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
			return (file_exists($this->getLanguageDirectory() . '/' . $languageFile) && is_file($this->getLanguageDirectory() . '/' . $languageFile) && preg_match("/^([a-z-]{2,5})$/i", $language));
		}
		
		private function formatLanguageFileName($language) {
			return $language . '.php';
		}
		
		private function formatLanguageName($language) {
			return str_replace('.php', '', $language);
		}
	}
