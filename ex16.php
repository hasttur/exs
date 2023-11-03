<?php

function solution(string $S): int
{
  $S = ltrim($S, "0");

  $array = preg_split('//', $S, -1, PREG_SPLIT_NO_EMPTY);

  $zeros = 0;
  $ones = 0;

  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == 0) {
      $zeros++;
    }

    if ($array[$i] == 1) {
      $ones++;
    }
  }
  return $zeros + ($ones - 1) * 2 + 1;
}

print solution("011100");