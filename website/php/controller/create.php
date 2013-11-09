<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/baseController.php";

	class Create extends BaseController {
    public $modules;

		public function __construct() {
      $this->create = true;
			$this->title = "CodenameY - Login";
      $this->setupAssets();
		}

    private function setupAssets() {
		  $this->addScript("/static/js/lib/bingMaps.js")
			     ->addScript("/static/js/lib/utils.js")
           ->addStyle("/static/css/create.css")
			     ->addScript("/static/js/create.js");
    }
	}
?>
