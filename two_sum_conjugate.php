<?php
$nums =[2,7,11,15];
$target = 13;
var_dump($nums);
echo 'target is: ' .$target;
echo '<br>';
echo 'output is';
echo '<br>';
var_dump(twoSum($nums, $target));

function twoSum($nums, $target) {
    $result=[];
    $map=[];
    for($i=0;$i<count($nums);$i++)
    {
         if(isset( $map[$target-$nums[$i]]))
         {
            $result[]=$i;
            $result[]=$map[$target-$nums[$i]];
            return $result;
         }else
         {
            $map[$nums[$i]]=$i;
         }   
    }
}