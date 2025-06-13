<?php
$input = -120536;
var_dump(reverse($input));
function reverse($x)
{
    $is_negative=false;
    if($x < 0)
    {
        $is_negative=true;
        $x=$x*(-1);
    }

    $reversedInt = 0;
    while ($x > 0) {
        $a = $x % 10;
        $x = (int)($x / 10);

        //Should no larger than Math.floor(Number.MAX_VALUE/10)
        if ($reversedInt >= 214748365)
            return 0;
        $reversedInt = $reversedInt * 10 + $a;
    }
    if ($is_negative) {
        $reversedInt = $reversedInt * (-1);
    }
    return $reversedInt;
}
