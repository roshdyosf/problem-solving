<?php
$arr = [0, 1, 0, 3, 12];
$writePointer = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] !== 0) {
        $arr[$writePointer] = $arr[$i];
        $writePointer++;
    }
}

while ($writePointer < count($arr)) {
    $arr[$writePointer] = 0;
    $writePointer++;
}

var_dump($arr);
