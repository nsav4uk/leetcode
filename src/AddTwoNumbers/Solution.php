<?php

declare(strict_types=1);

namespace Leetcode\AddTwoNumbers;

class Solution
{
    public function addTwoNumbers($l1, $l2): ListNode
    {
        $carry = 0;
        $resultedList = $data = new ListNode();
        while ($l1 || $l2 || $carry) {
            $result = ($l1->val ?? 0) + ($l2->val ?? 0) + $carry;
            $carry = $result > 9 ? 1 : 0;
            $data = $data->next = new ListNode($carry ? $result - 10 : $result);
            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;
        }

        return $resultedList->next;
    }
}
