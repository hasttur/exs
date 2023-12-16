<?php

function isPrime(int $number): bool
{
	if ($number <= 1) {
		return false; // Los números menores o iguales a 1 no son primos
	}

	for ($i = 2; $i <= sqrt($number); $i++) {
		if ($number % $i == 0) {
			return false; // Si es divisible por algún número, no es primo
		}
	}

	return true; // Si no se encontró ningún divisor, es primo
}

$result = isPrime(66);

if ($result) {
	echo "El número es primo.";
} else {
	echo "El número no es primo.";
}
