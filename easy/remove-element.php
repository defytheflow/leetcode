<?php

function swap(array &$array, int $i, int $j): void
{
    $tmp = $array[$j];
    $array[$j] = $array[$i];
    $array[$i] = $tmp;
}

function removeElement(array &$nums, int $val): int
{
    $k = 0;
    $i = 0;
    $j = $i + 1;

    while ($i < count($nums)) {

        if ($nums[$i] == $val) {
            // try to find a spot where to put this fella
            while ($j < count($nums) && $nums[$j] == $val) {
                $j++;
            }

            if ($j == count($nums) || $nums[$j] == $val) {
                // stop
                break;
            }

            swap($nums, $i, $j);
        }

        $i++;
        $j++;
        $k++;
    }

    return $k;
}

$nums = [3, 2, 2, 3];
$k = removeElement($nums, 3);
print_r($nums);
echo $k, PHP_EOL;

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$k = removeElement($nums, 2);
print_r($nums);
echo $k, PHP_EOL;
