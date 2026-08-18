<?php


$arr = [1, 8, 6, 2, 5, 4, 8, 3, 7];
$left = 0;
$right = count($arr) - 1;

$result =
    [
        'left' => $left,
        'right' => $right,
        'area' => 0
    ];
while ($left < $right) {
    $newArea = ($right - $left) * min($arr[$left], $arr[$right]);
    if ($newArea > $result['area']) {
        $result['left'] = $left;
        $result['right'] = $right;
        $result['area'] = $newArea;
    }

    if ($arr[$left] < $arr[$right]) {
        $left++;
    } else {
        $right--;
    }
}

print_r($result);
