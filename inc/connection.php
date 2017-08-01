<?php
try{
$db =   new PDO("mysql:host=localhost;dbname=database;port=3306","root","");
} catch (Exception $e){
    echo "Unable to connect to DB";
    echo $e->getMessage();
        exit;
}
/*
test connect 
var_dump($db);
*/
?>