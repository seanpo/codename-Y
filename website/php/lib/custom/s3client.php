<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/lib/thirdparty/S3.php";

  class S3Client {
    private $apiKey;
    private $secretKey;
    private $bucket;
    private $s3;

    public function __construct($apiKey, $secretKey, $bucket) {
      $this->apiKey = $apiKey;
      $this->secretKey = $secretKey;
      $this->bucket = $bucket;

      $this->s3 = new S3($apiKey, $secretKey);
    }

    public function writeToDB($id, $fileName, $fileTempName) {
        $this->s3->putBucket($this->bucket, S3::ACL_PUBLIC_READ);
        if ($this->s3->putObject(S3::inputFile($fileTempName), $this->bucket, $fileName, S3::ACL_PUBLIC_READ)) {   
          return true;
        }
        return false;
    }
  }
?>
