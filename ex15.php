<?php

function solution(array $A): int
{
	// Eliminar elementos no positivos y duplicados
	$filteredArray = array_values(array_unique(array_filter($A, function ($element) {
		return $element > 0;
	})));

	// Si el array está vacío, el resultado es 1
	if (empty($filteredArray)) {
		return 1;
	}

	// Ordenar el array resultante
	sort($filteredArray);

	// Iterar para encontrar el menor entero no presente
	$smallestInteger = 1;
	foreach ($filteredArray as $element) {
		if ($element == $smallestInteger) {
			$smallestInteger++;
		} else {
			return $smallestInteger;
		}
	}

	return $smallestInteger;
}
