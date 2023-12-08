<?php

function decimalToBinary(int $number): int
{
	if ($number == 0)
		return 0;

	$binary = "";

	while ($number > 0) {
		$bit = $number % 2;

		$binary = $bit . $binary;
		$number = floor($number / 2);
	}
	return intval($binary);
}

print decimalToBinary(77);