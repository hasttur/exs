<?php

function insertionSort(array $array): array
{
	$length = count($array);

	for ($i = 1; $i < $length; $i++) {
		$currentValue = $array[$i];
		$previousIndex = $i - 1;

		// Desplazar los elementos mayores hacia la derecha
		while ($previousIndex >= 0 && $array[$previousIndex] > $currentValue) {
			$array[$previousIndex + 1] = $array[$previousIndex];
			$previousIndex--;
		}

		// Insertar el elemento en la posición correcta
		$array[$previousIndex + 1] = $currentValue;
	}

	return $array;
}

$unsortedArray = [1, 4, 3, 4, 56, 7, 7, 3, 2, 45, 21, 67, 3, 455];
$sortedArray = insertionSort($unsortedArray);

// Imprimir el array ordenado
print_r($sortedArray);
