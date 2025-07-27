<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $data=file_get_contents("php://input");
    $data = json_decode($data, true);
    if(isset($data['name'])){
        $name=$data['name'];
        $email=$data['email'];
        $phone=$data['phone'];  
        $date=$data['date'];
        $sql="UPDATE students SET name='$name', email='$email', phone='$phone', date='$date' WHERE id=".$data['id'];
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
else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}