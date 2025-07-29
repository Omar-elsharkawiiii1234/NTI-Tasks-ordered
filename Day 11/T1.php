<?php
class book{
    public $title;
    public function read(){
        echo "The book title is: " . $this->title . "<br>";
    }
}
$title =new book();
$title->title = "The Atomic Habits";
$title->read();