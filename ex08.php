<?php

function fibonacci(int $number): array
{
	$response = [];

	if ($number >= 0) {
		for ($i = 0; $i < $number; $i++) {
			if ($i <= 1) {
				$response[$i] = $i;
			} else {
				$response[$i] = $response[$i - 1] + $response[$i - 2];
			}
		}
	}

	return $response;
}

$sequence = fibonacci(33);

// Imprimir el array
print_r($sequence);

// Imprimir la secuencia como cadena
echo implode(", ", $sequence);
