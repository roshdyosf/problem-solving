<?php

$t = (int) readline();

for ($i = 0; $i < $t; $i++) {
    $n = (int) readline();
    if ($n > 0) {
        $result = range($n, ($n * 2) - 1);
        echo implode(" ", $result) . PHP_EOL;

    }
}


?>