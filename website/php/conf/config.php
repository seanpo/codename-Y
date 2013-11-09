<?php
  $appName = getenv("OPENSHIFT_APP_NAME");
  $PRODUCTION = !empty($appName);
  $DEBUG_LEVEL = "NONE";

  if ($PRODUCTION) {
    error_reporting(E_ALL);
  }
?>
