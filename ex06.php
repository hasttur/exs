<?php

function findMaxMin(array $array): array
{
	$arrayLength = count($array);

	if ($arrayLength === 0) {
		return [];
	}

	$max = $array[0];
	$min = $array[0];

	for ($i = 1; $i < $arrayLength; $i++) {
		if ($array[$i] > $max) {
			$max = $array[$i];
		}

		if ($array[$i] < $min) {
			$min = $array[$i];
		}
	}

	return ["max" => $max, "min" => $min];
}

$myArray = [1, 2, 3, 4, 4, 55, 656, 6, 786, 623, 5, 125, 2345];
$result = findMaxMin($myArray);

// Imprimir el resultado
print_r($result);
