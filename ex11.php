<?php

function temperatureConverter(int $temperature, string $unit): array
{
	$convertedTemperature = 0;
	$targetUnit = "";

	if ($unit == "F") {
		$convertedTemperature = ($temperature - 32) * 5 / 9;
		$targetUnit = "C";
	} elseif ($unit == "C") {
		$convertedTemperature = ($temperature * 9 / 5) + 32;
		$targetUnit = "F";
	} else {
		// Manejar el caso donde la unidad no es ni "F" ni "C"
		return ["Invalid unit", ""];
	}

	return [$convertedTemperature, $targetUnit];
}

$temperatureF = 100;
$temperatureC = 100;

list($convertedTempF, $targetUnitF) = temperatureConverter($temperatureF, "F");
list($convertedTempC, $targetUnitC) = temperatureConverter($temperatureC, "C");

echo "Convertir $temperatureF °F a $targetUnitF: $convertedTempF °$targetUnitF" . PHP_EOL;
echo "Convertir $temperatureC °C a $targetUnitC: $convertedTempC °$targetUnitC" . PHP_EOL;
