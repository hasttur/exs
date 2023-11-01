<?php

function insertionSort(array $array): array
{
  for ($i=0; $i < count($array); $i++) { 
    $currentValue = $array[$i];
    $previousValue = $i -1;

    while ($previousValue >=0 && $array[$previousValue] > $currentValue) {
      $array[$previousValue +1] = $array[$previousValue];
      $previousValue--;
    }
    $array[$previousValue+1] = $currentValue;
  }
  return $array;
}

print_r(insertionSort([1,4,3,4,56,7,7,3,2,45,21,67,3,455]));