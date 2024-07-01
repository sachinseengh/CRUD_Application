<?php
session_start();
include '../database/database.php';



if( isset($_GET['password']) && isset($_GET['name']) && isset($_GET['address']) && isset($_GET['city'])){
    $email = $_SESSION['email'];
    $password = $_GET['password'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $city = $_GET['city'];


}



$sql ="update details set password ='$password',name ='$name',address ='$address',city='$city' where email='$email'";

echo $sql;
$res = mysqli_query($conn,$sql);

if($res){
    header('Location:../about.php?alert=Details Updated Successfully');
    exit();
}else{
    header('Location:../about.php?alert=Details updation failed');
    exit(); 
}

?>