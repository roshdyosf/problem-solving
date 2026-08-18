<?php
$nums = [1, 2, 3, 4];
$res = [];
$dum = 1;
$length = count($nums);

for ($i = 0; $i < $length; $i++) {
    $res[$i] = $dum;
    $dum *= $nums[$i];
}

$dum = 1;
for ($i = $length - 1; $i >= 0; $i--) {
    $res[$i] *= $dum;
    $dum *= $nums[$i];
}
var_dump($res);
