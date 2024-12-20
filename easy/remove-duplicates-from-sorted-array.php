<?php

function removeDuplicates(array &$nums): int
{
    $i = 0;
    $j = 1;
    $k = 1;

    while ($j < count($nums)) {
        if ($nums[$i] != $nums[$j]) {
            $nums[$i + 1] = $nums[$j];
            $i++;
            $k++;
        }
        $j++;
    }

    return $k;
}

$nums = [1, 1, 2];
$k = removeDuplicates($nums);

print_r($nums);
echo $k, PHP_EOL;

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$k = removeDuplicates($nums);

print_r($nums);
echo $k;
