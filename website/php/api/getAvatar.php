<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/s3config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/s3client.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $id = get('id', '', true);
  
  if ($expression = new Expression('id_one', '=', $id)){
      $user = Users::read($expression);
      return json_encode(array("image" => $user->image));
  }

  else {
      echo "User does not exist."
  }
?>