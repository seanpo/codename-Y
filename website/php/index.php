<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/login.php";

  $login = new Login();
	$login->render();
?>
