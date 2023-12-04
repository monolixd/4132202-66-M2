<?php

require "condb.php";

$id = $_POST['mem_id'];
$name = $_POST['name'];
$eamil = $_POST['email'];
$sql = "UPDATE tb_member SET member_name='$name',member_email'$eamil' WHERE id_member='id' ";
try{
    mysqli_query($conn,$sql);
}catch(Exception $e){
    //echo $e->getMessage();
    echo "error";
}