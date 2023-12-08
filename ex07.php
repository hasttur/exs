<?php

function factorial(int $number): float
{
	if ($number < 0)
		return -1;
	if ($number == 0 || $number == 1)
		return 1;

	if ($number > 1) {
		$response = 1;

		for ($i = 2; $i <= $number; $i++) {
			$response *= $i;
		}
		return $response;
	}
}

$value = 55;
print "El factorial del numero {$value} es: " . factorial($value);
