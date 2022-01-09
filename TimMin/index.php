<?php
function getIndexMin($arr){
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++ ){
        if ($min > $arr[$i]){
            $min =$arr[$i];
            $index = $i;
        }
    }
    return $index;
}
$arr = [5,6,2,7,9,0,10,1,11,15];

echo "Vị trí của phần tử nhỏ nhất trong mảng là : ".getIndexMin($arr);
