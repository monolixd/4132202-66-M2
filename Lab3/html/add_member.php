<?php

require "condb.php";

$id = $_POST['mem_id'];
$name = $_POST['name'];
$eamil = $_POST['email'];
$sql = "INSERT INTO tb_member VALUES('$id','$name','$email')";
try{
    mysqli_query($conn,$sql);
}catch(Exception $e){
    //echo $e->getMessage();
    echo "error";
}