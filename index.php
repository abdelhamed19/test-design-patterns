<?php

use Patterns\Creational\Prototype\Employee\EmployeePrototype;
require __DIR__ . '/vendor/autoload.php';

use Patterns\Creational\FactoryMethod\DialogExample\Buttons\UiButton;
use Patterns\Creational\FactoryMethod\DialogExample\Dialogs\MobileDialog;

$n = new UiButton();
echo $n->show();
var_dump($n->click());
// echo "<br>";
// echo $n->click();

// echo "<br>";
// $n = new MobileDialog();
// var_dump($n->createButton());


