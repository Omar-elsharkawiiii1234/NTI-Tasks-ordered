<?php
include "../db/db.php";
$id=$_GET["id"];
$sql="DELETE FROM courses WHERE id=$id";
mysqli_query($conn,$sql);
header("Location:course.php");