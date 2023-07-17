<?php
$input =120536;
echo 'input is: ' .$input;
echo '<br>';
echo 'output is: ' . reverse($input);

function reverse($x) {
       $flag=false;
       if($x<0)
       {
           $flag=true;
           $x=$x*(-1);
       }

        $reversedInt = 0;
       while($x>0) {
     $a = $x%10;
    $x = floor($x/10);
    
    //Should no larger than Math.floor(Number.MAX_VALUE/10)
    if($reversedInt >= 214748365)
        return 0;
    $reversedInt = $reversedInt*10+$a;
   }
    if($flag)
    {
       $reversedInt=$reversedInt*(-1);
    }
    return $reversedInt;
    }