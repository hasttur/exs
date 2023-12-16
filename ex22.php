<?php

function validateCode(string $code): string
{
	// Verifica si el código está vacío
	if (empty($code)) {
		return "No se puede validar, texto vacío";
	}

	$error = 0;
	$keyOpen = ['(', '{', '['];
	$keyClose = [')', '}', ']'];

	// Utiliza str_split para dividir el código en caracteres
	$array = str_split($code);

	foreach ($array as $char) {
		// Incrementa el contador si es una llave de apertura
		if (in_array($char, $keyOpen)) {
			$error++;
		}

		// Decrementa el contador si es una llave de cierre
		if (in_array($char, $keyClose)) {
			$error--;
		}
	}

	// Verifica si el contador de errores es diferente de cero
	if ($error !== 0) {
		return "Hay errores en su código";
	}

	return 'No hay errores en su código';
}

$goodCode = " 
 function (value) {
	 if (true) {
	 } else {}
 }
";

$badCode = "
 function (value {
	 if (true) {
	 } else {
	 
 }
";

$noCode = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere sem 
pulvinar mollis tristique. Nullam nunc justo, consequat et auctor faucibus, congue ut odio.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit quam sit amet felis tempus,
et convallis nunc posuere. Cras eget congue mauris, eu vulputate elit.";

// Utiliza variables con nombres más descriptivos
echo "01 = " . validateCode($goodCode) . PHP_EOL;
echo "02 = " . validateCode($badCode) . PHP_EOL;
echo "03 = " . validateCode($noCode) . PHP_EOL;
echo "04 = " . validateCode('') . PHP_EOL;
