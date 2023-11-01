<?php

// genera un rombo con el valor que se ingresa

function pattern(int $n): void
{
  $valueA = ($n - 1) / 2;
  $valueB = 3 * $n / 2 - 1;

  // rows
  for ($i = 0; $i < $n; $i++) {
    // columns
    for ($j = 0; $j < $n; $j++) {
      if ($i + $j == $valueA ||
          $i - $j == $valueA ||
          $j - $i == $valueA ||
          $i + $j == $valueB ||
          $i == $valueA ||
          $j == $valueA) {
        print "* ";
      } else {
        print "  ";
      }
    }
    print PHP_EOL;
  }
}

$n = 13;
pattern($n);