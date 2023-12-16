<?php

function alphaPatternOne(int $n): string
{
	$string = "";
	for ($i = 1; $i <= $n; $i++) {
		// Agrega espacios en blanco antes de los caracteres
		$string .= str_repeat(" ", $n - $i);

		for ($k = 0; $k < 2 * $i - 1; $k++) {
			// Convierte el índice a letra (A, B, C, ...)
			$string .= chr($k + 65);
		}
		$string .= PHP_EOL;
	}

	return $string . PHP_EOL;
}

function alphaPatternTwo(int $n): string
{
	$string = "";
	$count = 0;

	for ($i = 1; $i <= $n; $i++) {
		for ($j = 0; $j < $i; $j++) {
			// Convierte el contador a letra (A, B, C, ...)
			$string .= chr($count + 65);
			$count++;
		}
		$string .= PHP_EOL;
	}

	return $string;
}

// Imprime los patrones
echo alphaPatternOne(10);
echo alphaPatternTwo(5);
