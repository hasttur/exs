<?php

class MilesToKmConverter
{

	public final function milesToKm($miles)
	{
		return $this->getMilesToKmFactor() * $miles;
	}

	public function getMilesToKmFactor()
	{
		return 1.669;
	}
}

class NauticalMilesToKmConverter extends MilesToKmConverter
{
	public function printFactors()
	{
		print $this->getMilesToKmFactor() . " " . parent::getMilesToKmFactor();
	}

	public function getMilesToKmFactor()
	{
		return 1.852;
	}
}

(new NauticalMilesToKmConverter())->printFactors();