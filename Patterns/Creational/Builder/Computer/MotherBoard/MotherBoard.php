<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard;

use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetWorkCard;
use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private Disk $disk;
    private NetWorkCard $netWorkCard;
    public function __construct($cpu,$ram,$gpu,$sockets,$disk,$netWorkCard)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->disk = $disk;
        $this->netWorkCard = $netWorkCard;
    }
    public function getCpu():CPU
    {
        return $this->cpu;
    }
    public function getRam():RAM
    {
        return $this->ram;
    }
    public function getGpu():GPU
    {
        return $this->gpu;
    }
    public function getSockets():Sockets
    {
        return $this->sockets;
    }
    public function getDisk():Disk
    {
        return $this->disk;
    }
    public function getNetWorkCard():NetWorkCard
    {
        return $this->netWorkCard;
    }

}