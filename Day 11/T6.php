<?php
abstract class employee{
    protected $hours=20;
    protected $salary=0;
    abstract function calculateSalary();
}
class HourlyEmployee extends employee{
    public function calculateSalary() {
        $this->salary = $this->hours * 20; // Assuming $20 per hour
        return $this->salary;
    }
}
$employee = new HourlyEmployee();
$salary = $employee->calculateSalary();
echo "Salary for hourly employee: $" . $salary . "<br>";