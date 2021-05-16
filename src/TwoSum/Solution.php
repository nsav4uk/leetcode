<?php

declare(strict_types=1);

namespace Leetcode\TwoSum;

use ArithmeticError;

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        foreach ($nums as $key => $num) {
            unset($nums[$key]);
            if ($resultKey = array_search($target - $num, $nums)) {
                return [$key, $resultKey];
            }
        }

        throw new ArithmeticError('No two sum solution');
    }
}
