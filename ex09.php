<?php

function isPrime(int $number): int
{
  if ($number<=1)
    return -1;

  if ($number >1) {
    for ($i=2; $i < sqrt($number); $i++) { 
      if ($number % $i == 0) {
        return false;
      }
    }
    return true;
  }
}

print isPrime(66);