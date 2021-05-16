<?php

declare(strict_types=1);

namespace Leetcode\LongestSubstringWithoutRepeatingCharacters;

class Solution
{
    public function lengthOfLongestSubstring($s): int
    {
        $array = array_filter(str_split($s));
        $result = [];
        $temp = [];
        foreach ($array as $char) {
            if (!in_array($char, $temp, true)) {
                $temp[] = $char;
                $result = $temp;
            } else {
                $temp = [$char];
            }
        }

        return count($result);
    }
}
