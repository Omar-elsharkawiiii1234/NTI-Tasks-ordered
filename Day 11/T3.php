<?php
class course{
    private $instructor;
    private $title;
    public function __construct($title,$instructor) {
        $this->instructor = $instructor;
        $this->title = $title;
    }
    public function describe() {
        echo "Course Title: " . $this->title . "<br>";
        echo "Instructor: " . $this->instructor . "<br>";
    }
}
$course = new course("Introduction to PHP","Dr.Omar");
$course->describe();