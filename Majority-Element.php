<?php


$arr = [3, 7, 3, 1, 3, 3, 7, 2, 3, 2, 7, 3, 3, 7, 3, 7, 9, 3];
$c = $arr[0];
$count = 1;
for ($i = 1; $i < count($arr); $i++) {

    if ($c === $arr[$i])
        $count++;
    else if ($count === 0) {
        $c = $arr[$i];
        $count = 1;
    } else $count--;
}

echo $c;
