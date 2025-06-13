<?php
$strs=["flower","flow","flight"];
//var_dump(longest_common_subsequence($strs));
function longest_common_subsequence($strs)
{
      $longest_common_subsequence="";
      for($i=0;$i<strlen($strs[0]);$i++)
      {
          for($j=1;$j<count($strs);$j++)
          {
                if(!isset($strs[$j][$i]) || ($strs[0][$i] != $strs[$j][$i]))
                {
                    return $longest_common_subsequence;
                }
          }
          $longest_common_subsequence=$longest_common_subsequence.$strs[0][$i];
      }
      return $longest_common_subsequence;
}