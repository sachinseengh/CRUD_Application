<?php


include '../database/database.php';

if(isset($_GET['email']) && isset($_GET['password']) && isset($_GET['name']) && isset($_GET['address']) && isset($_GET['city'])){
    $email = $_GET['email'];
    $password = $_GET['password'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $city = $_GET['city'];
}


$sql ="insert into details (email,password,name,address,city) values('$email','$password','$name','$address','$city')";

echo $sql;
$res = mysqli_query($conn,$sql);

if($res){
    header('Location:../index.php?alert=Registered Successfully, Now you can log in');
    exit();
}else{
    header('Location:../register.php?alert=Registration Failed');
    exit(); 
}

?>