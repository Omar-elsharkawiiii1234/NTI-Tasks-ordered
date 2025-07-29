<?php
include 'oop.php';
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"), true);
$student=new student($data['name'], $data['email'], $data['age']);
$student->activate();
$student->toJson();