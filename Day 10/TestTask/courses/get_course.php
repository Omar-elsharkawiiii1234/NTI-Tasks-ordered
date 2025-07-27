<?php
include "../db.php";
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
$data = [];
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);