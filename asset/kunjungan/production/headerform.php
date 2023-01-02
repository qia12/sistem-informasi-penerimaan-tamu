<?php
    $hostname="localhost";
    $db="db_visitor";
    $Username="root";
    $Password="";

    $conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
    
    
    if(!$conn){
        die("Connection Failed:" .mysqli_connect_errno());
    }

    if(isset($_POST['konfirmasi'])){
        $Persetujuan=$_POST['psj1'];
        $Keterangan=$_POST['ket'];
    $sql = $conn -> prepare("Insert Into confirm_visit(Persetujuan,Keterangan) 
    values(:Persetujuan, :Keterangan)");
    $conn->beginTransaction();
    $sql->execute(array(':Persetujuan'=>$Persetujuan,
                        ':Keterangan'=>$Keterangan));
                        $conn->commit();
                        $conn->null;
                        header("Location:index2.php");
                        exit;
    }
    elseif(
        $Persetujuan="" || $Keterangan=""){
            echo "<h2>Record Not Saved...!</h2>";
        }
        

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style.css">

    <title>Form Konfirmasi Kunjungan</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>
<?php 

//$psjErr = $ketErr = "";
//$Persetujuan = $Keterangan = "";


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if (empty($_POST["Persetujuan"])) {
        //$psjErr = "Anda Harus Memilih";
        //echo $psjErr;
    //}else{
        //$Persetujuan = test_input($_POST["Persetujuan"]);   
    //}

    //if (empty($_POST["Keterangan"])) {
        //$ketErr = "Harus Diisi";
        //echo $ketErr;
    //}else{
        //$Keterangan = test_input($_POST["Keterangan"]);   
    //}

//}
    //function test_input($data) {
        //$data = trim($data);
        //$data = stripcslashes($data);
        //$data = htmlspecialchars($data);
        //return $data;
    //}
    

?>
