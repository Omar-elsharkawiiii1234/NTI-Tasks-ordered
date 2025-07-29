<?php
trait logger{
    public function log($message) {
        echo "Log: " . $message . "<br>";
    }
}
class student{
    use logger;
}
class teacher{
    use logger;
}
$student = new student();
$student->log("Student logged in");
$teacher = new teacher();
$teacher->log("Teacher logged in");