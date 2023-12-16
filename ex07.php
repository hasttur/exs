<?php

function factorial(int $number): int
{
	if ($number < 0) {
		return -1; // Retornar -1 para indicar un valor no válido
	}

	if ($number == 0 || $number == 1) {
		return 1;
	}

	if ($number > 1) {
		$response = 1;

		for ($i = 2; $i <= $number; $i++) {
			$response *= $i;
		}

		return $response;
	}
}

$value = 55;
$result = factorial($value);

if ($result === -1) {
	print "El factorial no está definido para números negativos.";
} else {
	print "El factorial del número {$value} es: " . $result;
}
