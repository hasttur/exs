<?php

function findMaxMin(array $array): array
{
	if (count($array) === 0)
		return [];

	$max = $array[0];
	$min = $array[0];

	for ($i = 0; $i < count($array); $i++) {
		if ($array[$i] > $max) {
			$max = $array[$i];
		}

		if ($array[$i] < $min) {
			$min = $array[$i];
		}
	}

	return ["max" => $max, "min" => $min];
}

print_r(findMaxMin([1, 2, 3, 4, 4, 55, 656, 6, 786, 623, 5, 125, 2345]));