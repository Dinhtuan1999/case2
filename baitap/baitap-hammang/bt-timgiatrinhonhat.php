<?php

$arr = [1,2,3,4,5,-100,-55,0];
echo findMin($arr);

function findMin($arr)
{
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return [$index, $min];
}
