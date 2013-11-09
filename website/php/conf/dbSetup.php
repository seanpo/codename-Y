<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/thirdparty/meekrodb.2.2.class.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/config.php";

  $openshiftsocket = getenv("OPENSHIFT_MYSQL_DB_SOCKET");

  if (isset($openshiftsocket)) {
    ini_set('mysql.default_socket', $openshiftsocket);
  }

  if ($PRODUCTION) {
    DB::$user = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
    DB::$password = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
    DB::$host = getenv("OPENSHIFT_MYSQL_DB_HOST");
    DB::$port = getenv("OPENSHIFT_MYSQL_DB_PORT");
    DB::$dbName = getenv("OPENSHIFT_APP_NAME");
  } else {
    DB::$user = "root";
    DB::$password = "Ch!n3rrr";
    DB::$dbName = "codenamey";
  }
?>
