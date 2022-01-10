<?php
function demKyTu($str, $x)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $x) {
            $count++;
        }
    }
    return $count;
}
$str="abcdabcaaa";
$x = "a";
echo demKyTu($str,$x);