<?php
$conn=new mysqli("localhost","root","","train_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email="nada@email.com";
$sql="SELECT * FROM students WHERE email= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row["name"]."<br>";
}
