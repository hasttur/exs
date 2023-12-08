<?php

class ActionStack
{
	private $stack = null;

	function __construct()
	{
		$this->stack = new SplStack();
	}

	public function performAction($action)
	{
		if (!is_null($action)) {
			$this->stack->push($action);
		}
	}

	public function undoAction()
	{
		if ($this->stack->isEmpty()) {
			throw new Exception("No more actions!");
		}
		return $this->stack->pop();
	}
}

$textActions = new ActionStack();
$textActions->performAction("Write text");
$textActions->performAction("Add an empty page");
$textActions->performAction("Change the font color");
$lastAction = $textActions->undoAction();
echo $lastAction;