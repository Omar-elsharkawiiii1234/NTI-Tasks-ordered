<?php
class animal{
    public $name;
    public function makeSound() {
        echo "The animal makes a sound<br>";
    }
}
class dog extends animal{
    public function makeSound() {
        echo "The Animal is ".$this->name." ,and it's sound is Woof Woof<br>";
    }
}
$dog = new dog();
$dog->name = "Dog";
$dog->makeSound();