<?php
function getMaxArr($arr)
{
    $max = $arr[0][0];
    $indexI = 0;
    $indexJ = 0;
    for ($i = 0; $i < count($arr); $i++ ){
        for ($j =0; $j < count($arr[0]); $j++ ){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
                $indexI = $i;
                $indexJ = $j;
            }
        }
    }
    return  [$max,$indexI,$indexJ];
}
$arr = [
    [2,4,6,7],
    [10,11,2],
    [4,20,9,16],
    [30,3,49,1]
];
$result = getMaxArr($arr);
echo "Giá trị lớn nhất của mảng là : arr[".$result[1]."][".$result[2]."] = ".$result[0];