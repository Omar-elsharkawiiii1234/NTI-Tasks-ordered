<?php
class shape{
    public function draw(){
        echo "Drawing a shape<br>";
    }
}
class circle extends shape{
    public function draw() {
        echo "Drawing a circle<br>";
    }
}
class rectangle extends shape{
    public function draw() {
        echo "Drawing a rectangle<br>";
    }
}
$circle = new circle();
$circle->draw();
$rectangle = new rectangle();
$rectangle->draw();