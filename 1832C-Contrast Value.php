<?php
$t = (int) readline();
for ($i = 0; $i < $t; $i++) {
    $n = (int) readline();

    $line = trim(readline());
    $a = explode(" ", $line);

    $status = 0;
    $count = 1;
    for ($j = 1; $j < $n; $j++) {

        if ($a[$j] > $a[$j - 1] && $status != 1) {
            $status = 1;
            $count++;
        } elseif ($a[$j] < $a[$j - 1] && $status != -1) {
            $status = -1;
            $count++;
        }

    }
    echo $count . PHP_EOL;
}



?>