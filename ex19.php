<?php

class ActionStack
{
	private $stack;

	/**
	 * Constructor de la clase ActionStack.
	 */
	public function __construct()
	{
		$this->stack = new SplStack();
	}

	/**
	 * Realiza una acción y la añade a la pila.
	 *
	 * @param mixed $action La acción a realizar.
	 */
	public function performAction($action)
	{
		if (!is_null($action)) {
			$this->stack->push($action);
		}
	}

	/**
	 * Deshace la última acción realizada.
	 *
	 * @return mixed La última acción realizada.
	 */
	public function undoAction()
	{
		// Verifica si la pila está vacía antes de intentar deshacer una acción
		if ($this->stack->isEmpty()) {
			// Podrías devolver null o algún otro valor predeterminado en lugar de arrojar una excepción.
			return null;
		}

		return $this->stack->pop();
	}
}

// Ejemplo de uso
$textActions = new ActionStack();
$textActions->performAction("Write text");
$textActions->performAction("Add an empty page");
$textActions->performAction("Change the font color");

// Intenta deshacer acciones
$lastAction1 = $textActions->undoAction();
$lastAction2 = $textActions->undoAction();

echo "Last Action 1: " . $lastAction1 . PHP_EOL;
echo "Last Action 2: " . ($lastAction2 ?? "No more actions") . PHP_EOL;
