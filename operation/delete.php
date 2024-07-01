<?php
session_start();
include '../database/database.php';

$id = $_GET['id'];

$sql ="delete from details where id='$id'";



$res = mysqli_query($conn,$sql);

if($res){
    session_destroy();
    header('Location:../index.php?alert=user Deleted Successfully');
    exit();
}else{
    header('Location:../about.php?alert=User Deletion Failed');
    exit(); 
}

?>