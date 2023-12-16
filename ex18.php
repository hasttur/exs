<?php

function calcularRango(int $value): int
{
	$calculo = 0;

	// Realizar el cálculo en base a la lógica proporcionada
	for ($contador = 1; $contador <= 5; $contador++) {
		$calculo += $value * $contador;
	}

	// Evaluar el resultado y asignar la respuesta en base a los rangos
	if ($calculo <= 20) {
		return 0;
	} elseif ($calculo <= 120) {
		return 1;
	} else {
		return 2;
	}
}

echo calcularRango(5);
