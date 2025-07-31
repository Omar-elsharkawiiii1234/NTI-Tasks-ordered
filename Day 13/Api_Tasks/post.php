<?php
header("Content-Type: application/json; charset=UTF-8");
include_once 'db.php';
$data= json_decode(file_get_contents("php://input"),true);
if(isset($data['title']) && isset($data['description']) && isset($data['price'])&&isset($data['hours'])) {
  $title=$data['title'];
  $description=$data['description'];
    $price=$data['price'];
    $hours=$data['hours'];
    $testselct = "SELECT * FROM courses WHERE title='$title' OR description='$description'";
    $result = mysqli_query($conn, $testselct);
if(mysqli_num_rows($result) > 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Course with this title already exists"]);
        exit;
    }else{
    $query = "INSERT INTO courses (title, description, price, hours) VALUES ('$title', '$description', '$price', '$hours')";
    if(mysqli_query($conn, $query)) {
     echo json_encode([
        "status" => "success",
        "message" => "Course added successfully"]);
     }else {
        echo json_encode([
        "status" => "error",
        "message" => "Error adding course: " . mysqli_error($conn)])
    ;
    }}
}else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid input data"])
    ;
}
