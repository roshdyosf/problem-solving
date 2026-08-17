<?php


function lengthOfLongestSubstring(string $str): int
{
    $lastSeen = [];
    $left = 0;
    $maxLength = 0;
    $length = strlen($str);

    for ($right = 0; $right < $length; $right++) {
        $char = $str[$right];
        if (isset($lastSeen[$char]) && $lastSeen[$char] >= $left) {
            $left = $lastSeen[$char] + 1;
        }
        $lastSeen[$char] = $right;
        $maxLength = max($maxLength, $right - $left + 1);
    }
    return $maxLength;
}



echo lengthOfLongestSubstring('abcabcbb');
echo lengthOfLongestSubstring('dvdf');
echo lengthOfLongestSubstring("abbba");
