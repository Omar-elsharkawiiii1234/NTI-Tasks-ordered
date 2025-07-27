<?php
include "db.php";
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
$sql = "SELECT students.name ,courses.title,enrollments.enrollment_date,courses.description,courses.hours FROM 
enrollments JOIN students ON enrollments.student_id = students.id
 JOIN courses ON enrollments.course_id = courses.id";
$result = mysqli_query($conn, $sql);
$data = [];
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);