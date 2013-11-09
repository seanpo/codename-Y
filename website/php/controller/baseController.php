<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/conf/mustacheSetup.php";
	require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

	abstract class BaseController {
		public $title;

		public $stylesheets = array(
			"/static/css/base.css"
		);

		public $javascripts = array(
			"/static/js/lib/utils.js"
		);

		public function addScript($script) {
			array_push($this->javascripts, $script);
			return $this;
		}

		public function addStyle($style) {
			array_push($this->stylesheets, $style);
			return $this;
		}

		public function render() {
			global $mustache;
			echo $mustache->render("base.html", $this);
		}
	}
?>
