<?php
namespace Patterns\Creational\Prototype\Employee;
class Salary
{
    private $salary;
    private $tax;
    private $medicalInsurance;
    public function __construct($salary, $tax, $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }
}