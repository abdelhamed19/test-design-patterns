<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\MainParts;
class Disk
{
    private string $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function getType ():string
    {
        return $this->type;
    }
}