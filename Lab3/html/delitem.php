<?php

require "condb.php";

$id = $_GET['mem_id'];
$sql = "DELETE FROM tb_member WHERE id_member = '$id'";
try{
    mysqli_query($conn,$sql);
}catch(Exception $e){
    //echo $e->getMessage();
    echo "error";
}