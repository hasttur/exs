<?php

function solution(string $S): bool
{
	$array = str_split($S); // Usar str_split en lugar de preg_split para dividir la cadena en caracteres
	$foundB = false;

	foreach ($array as $char) {
		if ($char === "b") {
			$foundB = true;
		} elseif ($foundB && $char === "a") {
			return false; // Tan pronto como encuentres "ba", devolver false
		}
	}

	return true;
}

// Ejemplo de uso
$result = solution("abcde");
var_dump($result); // Devolverá true

$result = solution("acdbe");
var_dump($result); // Devolverá false
