<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\MainParts;
class NetWorkCard
{
    private int $category;
    public function __construct($category)
    {
        $this->category = $category;
    }
    public function getCategory ():int
    {
        return $this->category;
    }
}