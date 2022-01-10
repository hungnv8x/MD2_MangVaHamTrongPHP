<?php
function sumColArr($arr, $x)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($j == $x) {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}
$arr = createArr(3,4);
echo "<pre>";
print_r($arr);
echo sumColArr($arr,2);

function createArr($row, $col)
{
    $arr = [];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $arr[$i][$j] = rand(1, 10);
        }
    }
    return $arr;
}



