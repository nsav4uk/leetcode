<?php

namespace LeetcodeTests\TwoSum;

use ArithmeticError;
use Leetcode\TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    private $addTwoNumbers;

    protected function setUp(): void
    {
        $this->addTwoNumbers = new Solution();
    }

    /**
     * @dataProvider numsProvider
     * @param array $nums
     * @param int $target
     * @param array $result
     */
    public function testTwoSum(array $nums, int $target, array $result): void
    {
        self::assertEquals($result, $this->addTwoNumbers->twoSum($nums, $target));
    }

    public function numsProvider(): array
    {
        return [
            [[2, 7, 11, 15], 9, [0, 1]],
            [[3, 2, 4], 6, [1, 2]],
            [[3, 3], 6, [0, 1]],
        ];
    }

    public function testTwoSumException(): void
    {
        $this->expectException(ArithmeticError::class);
        $this->addTwoNumbers->twoSum([], 6);
    }
}
