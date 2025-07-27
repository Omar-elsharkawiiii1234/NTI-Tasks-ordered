<?php
include "../db.php";
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
    // Collect and sanitize input data
    $data = file_get_contents("php://input");
    $data = json_decode($data, true);
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM courses WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header("Location: ../show.html");
            echo json_encode(["status" => "deleted"]);
        } else {
            echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "ID is required"]);
    }
