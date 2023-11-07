<?php

function sequentialSearch(array $array, int $element): int
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $element) {
            return $i;
        }
    }
    return -1;
}


print sequentialSearch([1, 3, 5, 6, 8, 9, 6, 42, 4], 4);
