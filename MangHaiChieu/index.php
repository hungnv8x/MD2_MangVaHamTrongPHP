<?php
function sumArrCheoChinh($arr){
    $sum =0;
    for ($i = 0; $i < count($arr) ; $i ++){
        for ($j =0; $j < count($arr[0]); $j ++){
            if ($i == $j){
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}
$arr=[
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],
];
echo sumArrCheoChinh($arr);