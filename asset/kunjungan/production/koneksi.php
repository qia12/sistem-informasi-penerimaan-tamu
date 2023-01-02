<?php
$hostname="localhost";
$db="db_visitor";
$Username="root";
$Password="";
try{
$conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOExpection $e) {
  echo $e->getMessage();
}
?>