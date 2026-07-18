<?php
$x = trim(readline());
if ($x === "")
    exit();


$digits = str_split($x);
$result = "";
foreach ($digits as $i => $digit) {
    $j = intval($digit);
    if ($j >= 5 && !($i == 0 && $j == 9)) {
        $j = 9 - $j;
    }
    $result .= $j;
}
echo $result . PHP_EOL;

?>