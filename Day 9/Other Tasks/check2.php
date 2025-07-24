<?php
$conn=mysqli_connect("localhost","root","","test123");
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
session_start();
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$select="SELECT * FROM `admin` WHERE email='$email' AND password='$pass'";
$result=mysqli_query($conn,$select);
$numrows=mysqli_num_rows($result);
if($numrows>=1){
    $_SESSION["loginstate"]=1;
    header("Location:product.php");
}else{
    $hashpass=password_hash($pass,PASSWORD_DEFAULT);
    $insert="INSERT INTO admin (name,email,password) VALUES ('$name','$email','$hashpass')";
    $result2=mysqli_query($conn,$insert);
    $_SESSION["loginstate"]=1;
    header("Location:login.php");
}