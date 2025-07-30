<?php
include "db.php";
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
$sql="SELECT * FROM students";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $data[]=$row;
}
echo json_encode($data);