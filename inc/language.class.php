<?php
	class LanguageManager {
		private	$languageDirectory,
				$defaultLanguage,
				$paramName;

		public function __construct($languageDirectory, $defaultLanguage, $paramName) {
			$this->languageDirectory = $languageDirectory;
			$this->defaultLanguage = $defaultLanguage;
			$this->paramName = $paramName;
		}

		public function getLanguageFileName($language = null) {
			$language = ($language && $this->isValidLanguage($language)) ? $language : $this->getUserLanguage();

			if(!$this->checkCookie($language)) {
				$this->createCookie($language);
			}
			
			return $this->languageDirectory . '/' . $this->formatLanguageFileName($language);
		}

		public function printLanguageOptions() {
			$optionsString = '';
			foreach($this->getExistingLanguages() as $language) {
				$optionsString .= "<option id='" . $language . "' value='" . $language . "' " . ($language == $this->getUserLanguage() ? 'selected' : '') . ">&nbsp;</option>\n";
			}
			
			return $optionsString;
		}
			
		private function getExistingLanguages() {
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
			if(isset($_GET[$this->paramName]) && $this->isValidLanguage($_GET[$this->paramName])) {
				$language = $_GET[$this->paramName];
			} else if(isset($_COOKIE[$this->paramName]) && $this->isValidLanguage($_COOKIE[$this->paramName])) {
				$language = $_COOKIE[$this->paramName];
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
			return (isset($_COOKIE[$this->paramName]) && $_COOKIE[$this->paramName] == $language);
		}
		
		private function createCookie($language) {
			setcookie($this->paramName, $language, time() + 31536000);
			header("Location: " . strtok($_SERVER['REQUEST_URI'], '?'));
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