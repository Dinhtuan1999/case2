<?php

//$myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
//$count = count($myArr);
//for ($i = 0; $i < $count; $i++) {
//    for ($j = 0; $j < $count - $i - 1; $j++) {
//        if ($myArr[$j] < $myArr[$j + 1]) {
//            $temp = $myArr[$j + 1];
//            $myArr[$j + 1] = $myArr[$j];
//            $myArr[$j] = $temp;
//        }
//    }
//}
////rsort($myArr);
//for ($i = 0; $i < $count; $i++) {
//    echo $myArr[$i] . " ";
//}

//function insertion_Sort($my_array)
//{
//    for ($i = 0; $i < 2; $i++) {
//        $val = $my_array[$i];
//        $j = $i - 1;
//        while ($j >= 0 && $my_array[$j] > $val) {
//            $my_array[$j + 1] = $my_array[$j];
//            $j--;
//        }
//        $my_array[$j + 1] = $val;
//    }
//    print_r($my_array);die();
//
//    return $my_array;
//}
//
//$test_array = array(3, 0, 6, 5, -1, 4, 1);
//echo "Original Array :\n";
//echo implode(', ', $test_array);
//echo "\nSorted Array :\n";
////print_r(insertion_Sort($test_array));
//insertion_Sort($test_array);

function selection_sort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$my_array );
echo "\nSorted Array :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;
?>
