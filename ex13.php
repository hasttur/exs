<?php

// transpose an array, but it needs to be the same long 
function transpose(array $array): array
{
    $response = [];
    if (count($array[0]) > 1) {
        for ($i = 0; $i < count($array[0]); $i++) {
            if (count($array) > 0) {
                for ($j = 0; $j < count($array); $j++) {
                    $response[$i][$j] = $array[$j][$i];
                }
            }
        }
    }

    return $response;
}

$ex = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9, 0]
];


print_r(transpose($ex));