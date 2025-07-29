<?php
class vechile{
    protected $model;
    protected $make;
    public function __construct($model, $make) {
        $this->model = $model;
        $this->make = $make;
    }
    // public function info() {
    //     echo "Model: " . $this->model . "<br>";
    //     echo "Make: " . $this->make . "<br><hr>";
    // }
}
class car extends vechile{
    public $fuelType;
    public function __construct($model,$make,$fuelType) {
        $this->fuelType = $fuelType;
        $this->model = $model;
        $this->make = $make;
    }
    public function info(){
        echo "Car Model: " . $this->model . "<br>";
        echo "Car Make: " . $this->make . "<br>";
        echo "Fuel Type: " . $this->fuelType . "<br>";
    }
}
// $vech=new vechile("Model S", "Tesla");
// $vech->info();
$car = new car("CyberTruk","Tesla","electric");
$car->info();
