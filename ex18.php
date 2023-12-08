<?php

function calcularRango(int $value): int
{
	$calculo = 0;
	$response = 0;
	for ($contador = 1; $contador <= 5; $contador++) {
		$calculo = $calculo + ($value * $contador);
	}

	if ($calculo <= 20) {
		$response = 0;
	} else {
		if ($calculo <= 120) {
			$response = 1;
		} else {
			$response = 2;
		}
	}
	return $response;
}

echo calcularRango(5);