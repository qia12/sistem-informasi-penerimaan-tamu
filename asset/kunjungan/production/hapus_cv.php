<?php


$hostname="localhost";
    $db="db_visitor";
    $Username="root";
    $Password="";

// connect to the database and select the publisher
$conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);

$NoKonfirmasi = $_GET['id'];
// construct the delete statement
$sql = 'DELETE FROM confirm_visit
        WHERE NoKonfirmasi =  "'.$NoKonfirmasi.'"';

// prepare the statement for execution
$result = $conn->prepare($sql);
// $result->bindParam(':NoKonfirmasi', $NoKonfirmasi, PDO::PARAM_INT);

var_dump($result);

// execute the statement
$result->execute();
	header('location:data_konfirmasi.php');

?>