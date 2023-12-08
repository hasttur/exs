<?php
// return the smallest integer that doenst occur in the arrray 
function solution(array $A): int
{
	$temp = [];
	foreach ($A as $element) {
		if ($element > 0) $temp[] = $element;
	}

	$i = 1;
	$last = 0;
	sort($temp);

	foreach ($temp as $tempElement) {

		if ($last == $tempElement) $i--;
		else if ($i != $tempElement) return $i;

		$i++;
		$last = $tempElement;
	}

	return $i;
}
