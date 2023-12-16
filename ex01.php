<?php

function generateDiamond(int $n): void
{
	// Asegurarse de que $n sea un número impar para obtener un rombo simétrico
	$n = ($n % 2 == 0) ? $n + 1 : $n;

	$midpoint = floor($n / 2);

	// Filas
	for ($i = 0; $i < $n; $i++) {
		// Columnas
		for ($j = 0; $j < $n; $j++) {
			if ($i + $j == $midpoint ||
				$i - $j == $midpoint ||
				$j - $i == $midpoint ||
				$i + $j == $n + $midpoint - 1 ||
				$i == $midpoint ||
				$j == $midpoint) {
				echo "* ";
			} else {
				echo "  ";
			}
		}
		echo PHP_EOL;
	}
}

$n = 13;
generateDiamond($n);
