<?php

declare(strict_types=1);

namespace Leetcode\AddTwoNumbers;

class ListNode
{
    public $val;
    public $next;

    public function __construct(int $val = 0, ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
