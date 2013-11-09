<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/s3config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/s3client.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $s3Client = new S3Client($accessKey, $secretKey, $bucketName);

  $submit = post('Submit', '', true);
  //retreive post variables  
  $id = post('id', '', true);
    
  $fileName = $_FILES['theFile']['name'];  
  $fileTempName = $_FILES['theFile']['tmp_name']; 

  if($s3Client->writeToDB($id, $fileName, $fileTempName)) {
    $furl = sprintf("http://%s.s3.amazonaws.com/%s", $bucketName, $fileName);
    $expression = new Expression("id", "=", $id);
    $users = Users::read($expression);
    foreach($users as $user) {
      $user->update("image", $furl);
    }   
    echo "File was uploaded successfully.";
  } 
?>              
