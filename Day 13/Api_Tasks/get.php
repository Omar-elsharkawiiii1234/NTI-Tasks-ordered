<?php   
header("Content-Type: application/json; charset=UTF-8");
include_once 'db.php';
$id=$_GET['id'] ?? null;
if(!isset($id) && $id==null){
    $sql = "SELECT * FROM `courses`";
    $result = $conn->query($sql);
    $courses=[];
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
} else{
    $sql="Select * FROM `courses` WHERE id=$id";
    $result = $conn->query($sql);
    $courses=[];
    if($result->num_rows > 0){
        $courses = $result->fetch_assoc();
    } else {
        $courses = ["error" => "No course found with the given ID"];
    }
}
echo json_encode($courses);
   