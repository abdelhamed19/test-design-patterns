<?php 
namespace Patterns\Creational\Builder\Computer;
class Mouse
{
    private bool $switchWithUltaUtilities;
    public function __construct($switchWithUltaUtilities)
    {
        $this->switchWithUltaUtilities = $switchWithUltaUtilities;
    }
    public function getUltaUtilities ():bool
    {
        return $this->switchWithUltaUtilities;
    }
}