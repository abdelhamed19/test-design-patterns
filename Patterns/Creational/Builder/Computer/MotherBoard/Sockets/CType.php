<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\Sockets;
class CType
{
    private bool $withVideo;
    public function __construct($withVideo)
    {
        $this->withVideo = $withVideo;
    }
    public function getType ():bool
    {
        return $this->withVideo;
    }
}