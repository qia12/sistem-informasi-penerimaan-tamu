<?php
$hostname="localhost";
$db="db_visitor";
$Username="root";
$Password="";

$conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
$NoKonfirmasi = $_POST['NoKonfirmasi'];
$Persetujuan = $_POST['Persetujuan'];
$Keterangan = $_POST['Keterangan'];
$NIP = $_POST['NIP'];
$Tanggal = $_POST['Tanggal'];

$data = [
    'NoKonfirmasi' => $NoKonfirmasi,
    'Persetujuan' => $Persetujuan,
    'Keterangan' =>$Keterangan,
    'NIP' => $NIP,
    'Tanggal' => $Tanggal,
];

$sql = "UPDATE confirm_visit SET Persetujuan=:Persetujuan, Keterangan=:Keterangan, 
NIP=:NIP, Tanggal=:Tanggal WHERE NoKonfirmasi=:NoKonfirmasi";

$result=$conn->prepare($sql);

$result->execute($data);
header('location:data_konfirmasi.php');


?>