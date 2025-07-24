<?php
$conn=mysqli_connect("localhost","root","","test123");
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
session_start();
$email=$_POST["email"];
$pass=$_POST["pass"];
$select="SELECT * FROM `admin` WHERE email='$email'";
$result=mysqli_query($conn,$select);
$fethch=mysqli_fetch_assoc($result);

if(password_verify($pass,$fethch['password'])){
    $_SESSION["loginstate"]=1;
    header("Location:product.php");
}else{
    $_SESSION["loginstate"]=0;
    header("Location:login.php");
}