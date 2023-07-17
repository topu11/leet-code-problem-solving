<?php
$nums =[2,7,11,15];
$target = 9;
var_dump($nums);
echo 'target is: ' .$target;
echo '<br>';
echo 'output is';
echo '<br>';
var_dump(twoSum($nums, $target));

function twoSum($nums, $target) {
    $result=[];
    $stop_flag=false;
    foreach($nums as $key=>$value)
    {
        for($j=$key+1;$j<sizeof($nums);$j++)
        {
           
           if((int)$value+(int)$nums[$j] == (int)$target)
           {
                array_push($result,$key);
                array_push($result,$j);
                break;
           }
          
        }
        
    }
    return $result;
}