<?php

function bubbleSort(array $array): array
{
  $count = count($array)-1;
  $changes = true;

  while ($changes) {
    $changes = false;

    for ($i = 0; $i < $count; $i++) {
      if ($array[$i] > $array[$i + 1]) {
        $temp = $array[$i];
        $array[$i] = $array[$i + 1];
        $array[$i + 1] = $temp;
        $changes = true;
      }
    }
  }

  return $array;
}

print_r(bubbleSort([2, 4, 65, 7, 8, 3, 2, 345, 21, 5, 1, 6, 87]));
print "La lista ordenada es: " . implode(", ", bubbleSort([2, 4, 65, 7, 8, 3, 2, 345, 21, 5, 1, 6, 87]));