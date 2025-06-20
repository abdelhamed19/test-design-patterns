<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\MainParts;
class GPU
{
    private float $size;
    public function __construct($size)
    {
        $this->size = $size;
    }
    public function getSize ():float
    {
        return $this->size;
    }
}