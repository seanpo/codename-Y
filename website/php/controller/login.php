<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/baseController.php";

	class Login extends BaseController {
    public $modules;

		public function __construct() {
      $this->login = true;
			$this->title = "CodenameY - Login";
      $this->setupAssets();
		}

    private function setupAssets() {
		  $this->addScript("/static/js/lib/bingMaps.js")
			     ->addScript("/static/js/lib/utils.js")
           ->addStyle("/static/css/login.css")
			     ->addScript("/static/js/login.js");
    }
	}
?>
