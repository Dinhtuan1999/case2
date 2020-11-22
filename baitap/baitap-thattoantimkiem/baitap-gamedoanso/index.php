<?php
function binarySearch(array $numbers, $needle){

    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            echo 'toi nghi nho hon'.$numbers[$mid].'<br>';
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            echo 'toi nghi lon hon'.$numbers[$mid].'<br>';
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}
$number = rand(1,200);
echo "so toi nghi la".$number.'<br>';
$numbers = range(1, 200, 1);
if (binarySearch($numbers, $number) !== FALSE) {
    echo "$number. Tro choi ket thuc \n";
} else {
    echo "$number Not found \n";
}

