<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\Sockets;
class USB
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