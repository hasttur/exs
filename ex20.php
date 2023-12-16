<?php

class MilesToKmConverter
{
	// Cambiado a protected para permitir acceso desde clases hijas
	protected final function milesToKm($miles)
	{
		return $this->getMilesToKmFactor() * $miles;
	}

	// Cambiado a protected para permitir acceso desde clases hijas
	protected function getMilesToKmFactor()
	{
		return 1.669;
	}
}

class NauticalMilesToKmConverter extends MilesToKmConverter
{
	public function printFactors()
	{
		// Uso directo de echo y concatenación de cadenas
		echo $this->getMilesToKmFactor() . " " . parent::getMilesToKmFactor() . PHP_EOL;
	}

	// Sobrescrito de forma más consistente con visibilidad protegida
	protected function getMilesToKmFactor()
	{
		return 1.852;
	}
}

// Uso directo de echo para imprimir el resultado
(new NauticalMilesToKmConverter())->printFactors();
