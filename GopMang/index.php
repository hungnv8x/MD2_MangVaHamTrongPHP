<?php
$arr1 = [1,2,3,4,5,6];
$arr2 = [14,7,8,20,9,10,11,12];
$arr3 = [];
for ($i =0;$i <count($arr1);$i ++){
    $arr3[$i]=$arr1[$i];
}
for ($i =count($arr1);$i <count($arr1)+count($arr2);$i ++){
    $arr3[$i]=$arr2[$i-count($arr1)];
}
function printArr($arr){
    for ($i =0; $i < count($arr); $i ++){
        echo $arr[$i]." ";
    }
}
printArr($arr1);
echo "<br>";
printArr($arr2);
echo "<br>";
printArr($arr3);