<?php   
class student{
    public $name;
    public $email;
    public $age;
    public $isactive = false;
    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    public function activate() {
        $this->isactive = true;
    }
    public function getStatus() {
        if ($this->isactive) {
            return "Active";
        } else {
            return "Inactive";
        }
    }
    public function toJson(){
        echo json_encode([
            "name" => $this->name,
            "email" => $this->email,
            "age" => $this->age,
            "status" => $this->getStatus()
        ]);
    }
}