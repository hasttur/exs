<?php

function reversePyramid(int $rows): void
{
	for ($i = 0; $i < $rows; $i++) {
		// Imprimir espacios en blanco antes de los asteriscos
		for ($j = 0; $j < $i; $j++) {
			echo " ";
		}

		// Imprimir los asteriscos
		for ($k = 0; $k < $rows - $i; $k++) {
			echo "* ";
		}

		echo PHP_EOL;
	}
}

reversePyramid(10);
