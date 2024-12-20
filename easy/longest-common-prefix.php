<?php

function longestCommonPrefix(array $strs): string
{
    $prefix = "";
    $i = 0;

    while ($i < strlen($strs[0])) {

        for ($j = 0, $k = 1; $k < count($strs); $j++, $k++) {
            $strJ = $strs[$j];
            $strK = $strs[$k];

            if ($i == strlen($strJ) || $i == strlen($strK)) {
                break 2;
            }

            $charJ = $strJ[$i];
            $charK = $strK[$i];

            if ($charJ != $charK) {
                break 2;
            }
        }

        $prefix .= $strs[0][$i];
        $i += 1;
    }

    return $prefix;
}

echo longestCommonPrefix(["flower", "flow", "flight"]), PHP_EOL;
echo longestCommonPrefix(["dog", "racecar", "car"]);
