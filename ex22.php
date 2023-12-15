<?php
function validateCode(string $code): string
{
	if ($code == '') {
		return "no se puede validar, texto vacio ";
	}
	$error = 0;
	$keyOpen = ['(', '{', '['];
	$keyClose = [')', '}', ']'];

	$array = preg_split('//', $code, -1, PREG_SPLIT_NO_EMPTY);

	foreach ($array as $char) {
		if (in_array($char, $keyOpen)) {
			$error++;
		}

		if (in_array($char, $keyClose)) {
			$error--;
		}
	}

	if ($error != 0) {
		return "Hay errores en su código";
	}
	return 'No hay errores en su código';
}

$goodcode = " 
 function (value) {
	 if (true) {
	 } else {}
 }
";

$badcode = "
 function (value {
	 if (true) {
	 } else {
	 
 }
";

$nocode = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere sem 
pulvinar mollis tristique. Nullam nunc justo, consequat et auctor faucibus, congue ut odio.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit quam sit amet felis tempus,
et convallis nunc posuere. Cras eget congue mauris, eu vulputate elit.";

echo "01 = " . validateCode($goodcode) . PHP_EOL;

echo "02 = " . validateCode($badcode) . PHP_EOL;

echo "03 = " . validateCode($nocode) . PHP_EOL;

echo "04 = " . validateCode('') . PHP_EOL;