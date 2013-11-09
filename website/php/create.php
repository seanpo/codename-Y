<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/create.php";

  $create = new Create();
	$create->render();
?>
