<?php

function bubbleSort(array $array): array
{
	$count = count($array) - 1;
	$changes = true;

	while ($changes) {
		$changes = false;

		for ($i = 0; $i < $count; $i++) {
			if ($array[$i] > $array[$i + 1]) {
				// Intercambiar elementos si están en el orden incorrecto
				$temp = $array[$i];
				$array[$i] = $array[$i + 1];
				$array[$i + 1] = $temp;
				$changes = true;
			}
		}
	}

	return $array;
}

$unsortedArray = [2, 4, 65, 7, 8, 3, 2, 345, 21, 5, 1, 6, 87];
$sortedArray = bubbleSort($unsortedArray);

// Imprime el array ordenado
echo "La lista ordenada es: " . implode(", ", $sortedArray);
