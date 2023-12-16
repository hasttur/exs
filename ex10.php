<?php

function decimalToBinary(int $number): string
{
	if ($number == 0) {
		return "0";
	}

	$binary = "";

	while ($number > 0) {
		$bit = $number % 2;

		$binary = $bit . $binary;
		$number = floor($number / 2);
	}

	return $binary;
}

$decimalNumber = 77;
$binaryRepresentation = decimalToBinary($decimalNumber);

echo "El número binario para $decimalNumber es: $binaryRepresentation";
