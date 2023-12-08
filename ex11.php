<?php

function temperatureConvertor(int $temperature, string $unit): array
{
	if ($unit == "F") {
		return [
			($temperature - 32) * 5 / 9, "C"
		];
	}

	if ($unit == "C") {
		return [
			($temperature * 5 / 9) + 32, "F"
		];
	}
}


print implode(" ", temperatureConvertor(100, "F")) . PHP_EOL;

print implode(" ", temperatureConvertor(100, "C"));