<?php
$x = trim(readline());

$result = "";
for ($i = 0; $i < strlen($x); $i++) {

    $j = intval($x[$i]);
    if ($j >= 5 && !($i == 0 && $j == 9)) {
        $j = 9 - $j;
    }
    $result .= $j;





}
echo $result . php_EOL;

?>