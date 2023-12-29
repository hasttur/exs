<?php

function quickSort($arr)
{
	$length = count($arr);

	if ($length <= 1) {
		return $arr;
	} else {
		// Elegir el pivote (podría ser el primer elemento, el último, o cualquier elemento del medio)
		$pivot = $arr[0];

		// Inicializar arrays para elementos menores y mayores que el pivote
		$menor = $mayor = array();

		// Particionar el array en base al pivote
		for ($i = 1; $i < $length; $i++) {
			if ($arr[$i] < $pivot) {
				$menor[] = $arr[$i];
			} else {
				$mayor[] = $arr[$i];
			}
		}

		// Recursivamente ordenar los arrays menores y mayores
		return array_merge(quickSort($menor), array($pivot), quickSort($mayor));
	}
}

// Ejemplo de uso
$array = [64, 34, 25, 12, 22, 11, 90];
$result = quickSort($array);
echo "Quick Sort: " . implode(", ", $result);
