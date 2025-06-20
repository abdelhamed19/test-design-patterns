<?php
namespace Patterns\Creational\Prototype\Employee;
class Address
{
    private $lat;
    private $lon;
    private $streetName;
    private $zipCode;
    private $city;
    private $country;
    private $buildingNumber;
    public function __construct($lat, $lon, $streetName, $zipCode, $city, $country, $buildingNumber)
    {
        $this->lat = $lat;
        $this->lon = $lon;
        $this->streetName = $streetName;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
    }

}