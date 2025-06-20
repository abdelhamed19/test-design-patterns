<?php
namespace Patterns\Creational\Prototype\Employee;
class ProfileData
{
    private $name = 'Employee Name';
    private $age;
    private Address $address;
    private $phoneNumber;
    private $mobileNumber;
    private $slackAccount;
    public function __construct($name, $age, Address $address, $phoneNumber, $mobileNumber, $slackAccount)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccount = $slackAccount;
    }
}