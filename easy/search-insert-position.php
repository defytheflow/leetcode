<?php

function searchInsert(array $nums, int $target): int
{
    $start = 0;
    $end = count($nums) - 1;

    while ($start < $end) {
        $mid = (int) (($start + $end) / 2);

        if ($nums[$mid] == $target) {
            return $mid;
        }

        if ($nums[$mid] < $target) {
            $start = $mid + 1;
        } else {
            $end = $mid - 1;
        }
    }

    return $nums[$start] < $target ? $start + 1 : $start;
}

echo searchInsert([1, 3, 5, 6], 5), PHP_EOL;
echo searchInsert([1, 3, 5, 6], 2), PHP_EOL;
echo searchInsert([1, 3, 5, 6], 7), PHP_EOL;
echo searchInsert([1, 3, 5, 6], 0), PHP_EOL;

