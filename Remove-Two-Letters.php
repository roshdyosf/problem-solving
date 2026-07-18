<?php

$t = (int) readline();

for ($i = 0; $i < $t; $i++) {
    $n = (int) readline();
    $s = trim(readline());
    $count = $n - 1;
    for ($j = 0; $j < $n - 2; $j++) {
        if ($s[$j] == $s[$j + 2]) {
            $count--;
        }

    }
    echo $count . PHP_EOL;
}


?>