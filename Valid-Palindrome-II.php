<?php
function validPalindrome($str, $left = 0, $right = null, $count = 1): bool
{
    if ($right === null) {
        $right = strlen($str) - 1;
    }
    while ($left < $right) {
        if ($str[$left] !== $str[$right]) {
            if ($count === 1) {
                return validPalindrome($str, $left, $right - 1, 0)
                    || validPalindrome($str, $left + 1, $right, 0);
            }
            return false;
        }
        $left++;
        $right--;
    }
    return true;
}

var_dump(validPalindrome("abca" ));
var_dump(validPalindrome("abccycdba"));
