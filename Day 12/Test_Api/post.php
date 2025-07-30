<?php
include "db.php";
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Origin: *");
$data=json_decode(file_get_contents("php://input"), true);
echo "<pre>";
print_r($data);
echo "</pre>";
