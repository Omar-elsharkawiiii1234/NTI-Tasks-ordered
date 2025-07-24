<?php
$conn=mysqli_connect("localhost","root","","test123");
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
session_start();
$product_name=$_POST["productname"];
$description=$_POST["description"];
$image=$_FILES["image"]["name"];
$encyimage=base64_encode($image);
$insert="INSERT INTO `products` (product_name,description,image) VALUES ('$product_name','$description','$encyimage')";
$result=mysqli_query($conn,$insert);
$fethch=mysqli_fetch_assoc($result);
$numrows=mysqli_num_rows($result);
$_SESSION["upload"]=1;
header("Location:product.php");