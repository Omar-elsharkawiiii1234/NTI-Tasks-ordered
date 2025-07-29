<?php
class emploee{
   public $name="omar";
    private $bounus=500;
    protected $salary=5000;
    public function print(){
        echo "Name: " . $this->name . "<br>";
        echo "Bounus: " . $this->bounus . "<br>"; 
        echo "Salary: " . $this->salary . "<br>"; 
    }
}
$emp = new emploee();
$emp->print();