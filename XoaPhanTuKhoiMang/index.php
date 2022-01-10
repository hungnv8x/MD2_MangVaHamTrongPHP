<?php
function deleteArr($arr,$x){
    for ($i = 0; $i <= count($arr); $i ++){
        if ($arr[$i] == $x){
            unset($arr[$i]);
        }
    }
    return $arr;
}
$arr = [1,3,2,3,3,4,4,5,6];
echo "<pre>";
print_r(deleteArr($arr,3));