<?php

if(isSet($_GET['w']) && isSet($_SERVER['PATH_INFO'])){
  echo $_SERVER['PATH_INFO'];
  echo "<br>";
  echo $_SERVER['QUERY_STRING'];
  echo "<br>";
  echo $_GET['w'];
}

?>
