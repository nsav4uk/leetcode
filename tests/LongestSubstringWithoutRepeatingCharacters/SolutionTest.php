<?php

namespace LeetcodeTests\LongestSubstringWithoutRepeatingCharacters;

use Leetcode\LongestSubstringWithoutRepeatingCharacters\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider stringProvider
     * @param string $s
     * @param int $result
     */
    public function testLengthOfLongestSubstring(string $s, int $result): void
    {
        $solution = new Solution();
        self::assertEquals($result, $solution->lengthOfLongestSubstring($s));
    }

    public function stringProvider(): array
    {
        return [
            ['abcabcbb', 3],
            ['bbbbb', 1],
            ['pwwkew', 3],
            ['', 0],
            ['dvdf', 3]
        ];
    }
}
