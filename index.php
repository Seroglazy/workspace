<?php


if (file_exists(__DIR__ . '/../../autoload.php'))
{include  __DIR__ . '/../../autoload.php';}
else {
    include __DIR__ . '/core/EquationInterface.php';
    include __DIR__ . '/core/LogInterface.php';
    include __DIR__ . '/core/LogAbstract.php';
    include __DIR__ . '/vanuta/VanutaException.php';
    include __DIR__ . '/vanuta/LinearEq.php';
    include __DIR__ . '/vanuta/QuadraticEq.php';
    include __DIR__ . '/vanuta/Log.php';
}

use vanuta\Log;
use vanuta\VanutaException;


function entercheck($num,$letter)
{
    for (;;) {
        echo "$letter = ";
        $num=readline();
        if(is_numeric($num))
        {
            return $num;
        }
        else {
            echo "Inappropriate symbols. Can only type numbers and dot \n";
        }
    }
    return;
}


$a=0;$b=0;$c=0;
$a=entercheck($a,'a');
$b=entercheck($b,'b');
$c=entercheck($c,'c');

echo "\n vars: $a,$b,$c \n";

try {
    $eq=new vanuta\QuadraticEq();
    Log::log("Roots are ". implode(", ", ($eq->solve($a,$b,$c))));
} catch (vanuta\VanutaException $e) {
    Log::log("Error: ".$e->getMessage());
}

Log::write();
