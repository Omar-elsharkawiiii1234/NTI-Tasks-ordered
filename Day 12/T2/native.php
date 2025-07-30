<?php
$conn=mysqli_connect("localhost","root","","train_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email="basem@email.com";
$sql="SELECT * FROM students WHERE email= ? ";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"]."<br>";
}
