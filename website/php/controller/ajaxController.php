<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/conf/mustacheSetup.php";
	require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

	class AjaxController {
    public $response;
    
    public function __construct($response) {
      $this->response = $response;
    }

		public function render() {
			global $mustache;
      $this->response->commit();
			echo $mustache->render("ajax.html", $this);
		}
	}
?>
