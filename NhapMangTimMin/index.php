<?php
function getMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i ++){
        if ($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr = [3,10,9,5,18,1,14,16,11];
echo getMin($arr);