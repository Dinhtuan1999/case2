<?php
//function countNumber($value,$number){
//    $count= 0;
//    for ($i = 0; $i < count($number); $i++){
//        if ($number[$i] == $value){
//            $count++;
//        }
//
//    }
//    return $count;
//}
//echo countNumber(1,[1,1,2,3,1,6,78,11]);

$arr = [1,1,2,3,1,6,78,11];
echo '<pre>';
print_r(array_count_values($arr));
