<?php

$host = "localhost";
$name = "root";
$password = "";
$dbname = "compumeum";

$conn = new mysqli($host,$name,$password,$dbname);

if(!$conn){
    die("Database not found.");
}

?>