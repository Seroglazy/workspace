<?php

use vanuta\Log;
include  __DIR__ . '/core/EquationInterface.php';
include  __DIR__ . '/core/LogInterface.php';
include  __DIR__ . '/core/LogAbstract.php';
include  __DIR__ . '/vanuta/LinearEq.php';
include  __DIR__ . '/vanuta/QuadraticEq.php';
include  __DIR__ . '/vanuta/Log.php';

$a=6;
$b=10;
$c=-5;

echo "\n vars: $a,$b,$c \nSolution: ";

$eq=new vanuta\QuadraticEq();
Log::log(implode(", ", ($eq->solve($a,$b,$c))));


Log::write();
