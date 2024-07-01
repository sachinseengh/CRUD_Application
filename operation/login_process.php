<?php

session_start();
include '../database/database.php';

if(isset($_GET['email']) && isset($_GET['password']) ){
    $email = $_GET['email'];
    $password = $_GET['password'];
   
}



$sql ="select * from details where email = '$email' and password ='$password'";


$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){

    $_SESSION['email']=$email;
    header('Location:../home.php');
    exit();
}else{
    header('Location:../index.php?alert=Incorrect Credentials');
    exit(); 
}

?>

?>