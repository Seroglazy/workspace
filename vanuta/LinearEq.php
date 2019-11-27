<?php
namespace vanuta;
class LinearEq
{
    function solvel($a,$b)
    {
        //aX+b=0
        //x=-b/a
        if ($a==0)
        {
            throw new VanutaException("Equation does not exist");
        }

        $x=(-1*$b)/$a;
        $this->x=$x;
        Log::log("Linear equation ($a x+$b) root: $x");
        return $x;

    }
}