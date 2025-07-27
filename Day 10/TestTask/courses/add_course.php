<?php
include "../db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $data=file_get_contents("php://input");
    $data = json_decode($data, true);
    if(isset($data['title'])){
        $title=$data['title'];
        $description=$data['desc'];      
        $price=$data['price'];
        $hours=$data['hours'];
        $sql="INSERT INTO courses (title,description,hours,price) VALUES ('$title', '$description','$hours','$price' )";
         // Check if the title is not empty
        $result= mysqli_query($conn, $sql);
        if ($result) {
            echo json_encode(["status" => "inserted"]);
        } else {
            echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
        }
    } else {
        echo json_encode(["status" => "error" , "message" => "title is required from form only"]);
    }

}