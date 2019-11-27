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
					$x = "";
                    Log::log("Equation does not exist");
					return $x;
				}
				
					$x=(-1*$b)/$a;
					$this->x=$x;
	                Log::log("Linear equation ($a x+$b)");
					return $x;
				
			} 
		}