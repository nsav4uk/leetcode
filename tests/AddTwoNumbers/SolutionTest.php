<?php

namespace LeetcodeTests\AddTwoNumbers;

use Leetcode\AddTwoNumbers\Solution;
use Leetcode\AddTwoNumbers\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider linkedListsProvider
     * @param ListNode $l1
     * @param ListNode $l2
     * @param ListNode $result
     */
    public function testAddTwoNumbers(ListNode $l1, ListNode $l2, ListNode $result): void
    {
        $addTwoNumbers = new Solution();
        self::assertEquals($result, $addTwoNumbers->addTwoNumbers($l1, $l2));
    }

    public function linkedListsProvider(): array
    {
        return [
            [
                new ListNode(2, new ListNode(4, new ListNode(3))),
                new ListNode(5, new ListNode(6, new ListNode(4))),
                new ListNode(7, new ListNode(0, new ListNode(8))),
            ],
            [
                new ListNode(),
                new ListNode(),
                new ListNode(),
            ],
            [
                new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9,
                    new ListNode(9, new ListNode(9, new ListNode(9))))))),
                new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9)))),
                new ListNode(8, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(0,
                    new ListNode(0, new ListNode(0, new ListNode(1)))))))),
            ],
        ];
    }
}
