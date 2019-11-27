<?php

/**
 *
 */
class B
{
    protected $x;
    function linear($a,$b)
    {

        if ($a==0)
        {
            return $x[]="Doesnt exist";

        }
        else
        {
            $x=(-1*$b)/$a;
        }
        $this->x=$x;
        return $x;
    }
}

/**
 *
 */
class A extends B
{
    protected function discr($a,$b,$c)
    {
        //D=b^2-4ac
        $discr=pow($b,2)-4*$a*$c;
        return $discr;
    }

    function solve($a,$b,$c)
    {
        if ($a==0) {
            $x[]=$this->linear($b,$c);
            return $x;
        }

        $discr=$this->discr($a,$b,$c);
        if ($discr < 0) {
            return $x[]="Discriminant is less than zero";
        }
        else if ($discr == 0)
        {
            $x[]=($b*-1)/(2*$a);
        }
        else
        {
            $x[]=(($b*-1)+sqrt($this->discr($a,$b,$c)))/(2*$a);
            $x[]=(($b*-1)-sqrt($this->discr($a,$b,$c)))/(2*$a);
        }
        $this->x=$x;
        return $x;
    }
}
$a1=new A();

print_r ($a1->solve(2,6,1)); echo "<br>";
print_r ($a1->solve(0,6,2)); echo "<br>";
print_r ($a1->solve(1,2,1)); echo "<br>";
print_r ($a1->solve(6,1,6)); echo "<br>";