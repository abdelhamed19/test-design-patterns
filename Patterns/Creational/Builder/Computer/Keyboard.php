<?php 
namespace Patterns\Creational\Builder\Computer;
class Keyboard
{
    private bool $utfSupport;
    public function __construct($utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }
    public function getSupport ():bool
    {
        return $this->utfSupport;
    }
}