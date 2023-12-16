<?php

function binarySearch(array $array, int $element): int
{
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
			$right = $half - 1;  // Corregir este valor a -1 en lugar de +1
		}
	}

	return -1; // Devolver -1 si el elemento no se encuentra
}

$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$elementToSearch = 6;

$result = binarySearch($myArray, $elementToSearch);

if ($result != -1) {
	echo "El elemento $elementToSearch se encuentra en el índice $result.";
} else {
	echo "El elemento $elementToSearch no se encuentra en el array.";
}
