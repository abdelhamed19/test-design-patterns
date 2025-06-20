<?php

namespace Patterns\Creational\Prototype\Employee;

class EmployeePrototype
{
    private Salary $salary;
    private ProfileData $profileData;
    
    public function __construct($salary, $profileData)
    {
        $this->salary = $salary;
        $this->profileData = $profileData;
    }
    public function __clone()
    {
        return $this;
    }
}
