<?php

define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "food_db");
define('DB_DRIVER', "mysql");

function getDbConnection() {
  $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER . ";charset=utf8", DB_USER, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  return $db;
}

function isNetworkAvailable() {
    $connected = @fsockopen("www.google.com", 80); 
    if ($connected){
      fclose($connected);
      return true;
    } else{
      return false;
    }
}

if(!isNetworkAvailable()) {
	die('Unable to connect to Internet. Please check your internet connection.');
}
