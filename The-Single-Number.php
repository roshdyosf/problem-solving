<?php
$arr = [1, 4, 2,  1, 2];
$u = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    $u = $u ^ $arr[$i];
}
echo $u;
