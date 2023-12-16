<?php

function transpose(array $array): array
{
	$response = [];

	// Verificar que la matriz no esté vacía
	if (count($array) > 0) {
		// Obtener la longitud de la submatriz más larga
		$maxLength = max(array_map('count', $array));

		// Iterar sobre las columnas
		for ($i = 0; $i < $maxLength; $i++) {
			// Iterar sobre las filas
			foreach ($array as $rowIndex => $row) {
				// Agregar el elemento si existe, de lo contrario, agregar nulo
				$response[$i][$rowIndex] = isset($row[$i]) ? $row[$i] : null;
			}
		}
	}

	return $response;
}

$ex = [
	[1, 2, 3],
	[4, 5, 6],
	[7, 8, 9, 0]
];

print_r(transpose($ex));
