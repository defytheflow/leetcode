<?php

class ListNode
{
    function __construct(public int $val = 0, public ?ListNode $next = null) {}
}

function mergeTwoLists(?ListNode $headA, ?ListNode $headB): ?ListNode
{
    if ($headA == null && $headB == null) {
        return null;
    } else if ($headA == null) {
        return $headB;
    } else if ($headB == null) {
        return $headA;
    }

    $currA = $headA;
    $currB = $headB;

    if ($headA->val < $headB->val) {
        $head = $headA;
        $currHead = $head;
        $currA = $headA->next;
    } else {
        $head = $headB;
        $currHead = $head;
        $currB = $currB->next;
    }

    while ($currA && $currB) {
        if ($currA->val <= $currB->val) {
            $currHead->next = $currA;
            $currA = $currA->next;
            $currHead = $currHead->next;
        } else {
            $currHead->next = $currB;
            $currB = $currB->next;
            $currHead = $currHead->next;
        }
    }

    if ($currA) {
        $currHead->next = $currA;
    } else if ($currB) {
        $currHead->next = $currB;
    }

    return $head;
}

$list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$list2 = new ListNode(1, new ListNode(3, new ListNode(4)));

print_r(mergeTwoLists($list1, $list2));
// print_r(mergeTwoLists(new ListNode(), new ListNode()));
// print_r(mergeTwoLists(new ListNode(), new ListNode(0)));
