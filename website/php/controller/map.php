<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/baseController.php";

	class Map extends BaseController {
    public $modules;

		public function __construct() {
      $this->map = true;
			$this->title = "CodenameY - Map";
		}

    private function setupAssets() {
		  $this->addScript("/static/js/lib/bingMaps.js")
			     ->addScript("/static/js/lib/utils.js")
			     ->addScript("/static/js/map.js")
           ->addStyle("/static/css/map.css");
    }
	}
?>
