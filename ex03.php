<?php

function binarySearch(array $array, int $element): int
{
    print_r($array);

    $left = 0;
    $right = count($array) - 1;

    while ($left <= $right) {
        $half = floor(($left + $right) / 2);

        if ($array[$half] == $element) {
            return $half;
        }

        if ($array[$half] < $element) {
            $left = $half + 1;
        } else {
            $right = $half + 1;
        }
    }
}

print binarySearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 6);