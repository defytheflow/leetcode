<?php


function lengthOfLastWord(string $str): int
{
    $count = 0;

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        if ($str[$i] == " ")  {
            if ($count > 0) {
                // space after a word
                break;
            } else {
                // skip spaces
                continue;
            }
        }

        $count += 1;
    }

    return $count;
}

echo lengthOfLastWord("Hello World"), PHP_EOL;
echo lengthOfLastWord("   fly me   to   the moon  "), PHP_EOL;
echo lengthOfLastWord("luffy is still joyboy"), PHP_EOL;
