<?php

function sequentialSearch(array $array, int $element): int
{
	$arrayLength = count($array);

	for ($i = 0; $i < $arrayLength; $i++) {
		if ($array[$i] == $element) {
			return $i;
		}
	}

	return -1;
}

$myArray = [1, 3, 5, 6, 8, 9, 6, 42, 4];
$elementToSearch = 4;

$result = sequentialSearch($myArray, $elementToSearch);

if ($result != -1) {
	echo "El elemento $elementToSearch se encuentra en el índice $result.";
} else {
	echo "El elemento $elementToSearch no se encuentra en el array.";
}

