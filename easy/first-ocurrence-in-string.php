<?php

namespace LeetCode;

function strStr(string $haystack, string $needle): int
{
    if (strlen($needle) > strlen($haystack)) {
        return -1;
    }

    $i = 0;
    $j = 0;
    $match = -1;

    while ($i < strlen($haystack)) {
        if ($j < strlen($needle) && $haystack[$i] == $needle[$j]) {
            if ($match == -1) {
                $match = $i;
            }
            $j++;
            $i++;
        }
        else {
            if ($match != -1 && $j == strlen($needle)) {
                // match found
                break;
            }
            if ($match != -1) {
                $i = $match + 1;
            } else {
                $i++;
            }
            $j = 0;
            $match = -1;
        }
    }

    if ($match != -1 && $j < strlen($needle)) {
        $match = -1;
    }

    return $match;
}

echo strStr("sadbutsad", "sad"), PHP_EOL;
echo strStr("leetcode", "leeto"), PHP_EOL;
echo strStr("aaa", "aaaa"), PHP_EOL;
echo strStr("mississippi", "issip"), PHP_EOL;
echo strStr("mississippi", "issipi"), PHP_EOL;
