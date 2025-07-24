<?php
$conn=mysqli_connect("localhost","root","","train_system");
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
session_start();
$email=$_POST["email"];
$pass=$_POST["pass"];
// $select="SELECT * FROM `admin` WHERE email='$email'";
// $result=mysqli_query($conn,$select);
// $fetch=mysqli_fetch_assoc($result);

// if(password_verify($pass,$fetch['password'])){
//     $_SESSION["loginstate"]=1;
//     $_SESSION['role']=$fetch['role'];
//     // echo $fetch["role"];
//     header("Location:index.php");
// }else{
//     $_SESSION["loginstate"]=0;
//     header("Location:login.php");
// }
$stmt=mysqli_prepare($conn,"SELECT * FROM `admin` WHERE email= ?");
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
$result=mysqli_stmt_get_result($stmt);
if($user =mysqli_fetch_assoc($result)){
    if(password_verify($pass,$user['password'])){
        $_SESSION["loginstate"]=1;
        $_SESSION['role']=$user['role'];
        // echo $fetch["role"];
        header("Location:index.php");
    }else{
        $_SESSION["loginstate"]=0;
        header("Location:login.php");
    }   
}