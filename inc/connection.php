<?php

try {
    //sqllite driver
    //$db = new PDO("sqlite:".__DIR__."/database.db");

$dsn = 'mysql:host=localhost;dbname=database';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
   $db = new PDO($dsn, $username, $password, $options);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect";
  exit;
}