<?php
$host = "db";
$username = "root";
$pass = "1234";
$db = "internet";
try{
    $conn = mysqli_connect($host,$username,$pass,$db);
    mysqli_query($conn,"SET NAMES utf8");  
}
catch(Exception $e){
    $error->getMessage();
    error_log($error);
    echo $error;
}

?>