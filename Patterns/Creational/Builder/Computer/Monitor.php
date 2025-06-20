<?php 
namespace Patterns\Creational\Builder\Computer;
class Monitor
{
    private string $resolution;
    public function __construct($resolution)
    {
        $this->resolution = $resolution;
    }
    public function getResolution ():string
    {
        return $this->resolution;
    }
}