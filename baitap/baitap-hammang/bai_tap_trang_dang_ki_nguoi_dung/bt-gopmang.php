<?php

$arr1 = [1, 5, 10, 15, 20, 44, 33];
$arr2 = [2, 3, 4, 2, 2, 3, 4, 34, 2];
$arr = [];
for ($i = 0; $i < count($arr1); $i++) {
    $arr[$i] = $arr1[$i];
}
echo count($arr1)."<br>";
echo count($arr2)."<br>";
echo count($arr)."<br>";

$length_arr = count($arr);

for ($i = 0; $i < count($arr2); $i++) {
    $arr[$i + $length_arr] = $arr2[$i];
}

print("<pre>".print_r($arr,true)."</pre>");
