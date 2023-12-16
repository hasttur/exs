<?php

function hollowDiamond(int $number): void
{
	// Imprimir la parte superior del diamante
	for ($i = 1; $i <= $number; $i++) {
		// Imprimir los asteriscos a la izquierda
		for ($j = $i; $j <= $number; $j++) {
			print "*";
		}

		// Imprimir los espacios en blanco en el centro
		for ($j = 1; $j <= 2 * $i - 2; $j++) {
			print " ";
		}

		// Imprimir los asteriscos a la derecha
		for ($k = $i; $k <= $number; $k++) {
			print "*";
		}

		print "\n";
	}

	// Imprimir la parte inferior del diamante
	for ($i = 1; $i <= $number; $i++) {
		// Imprimir los asteriscos a la izquierda
		for ($j = 1; $j <= $i; $j++) {
			print "*";
		}

		// Imprimir los espacios en blanco en el centro
		for ($k = 2 * $i - 2; $k < 2 * $number - 2; $k++) {
			print " ";
		}

		// Imprimir los asteriscos a la derecha
		for ($k = 1; $k <= $i; $k++) {
			print "*";
		}

		print "\n";
	}
}

hollowDiamond(6);
