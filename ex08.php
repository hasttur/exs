<?php

function fibonacci(int $number): array
{
  if ($number > 1) {
    $response = [0, 1];

    for ($i = 2; $i < $number; $i++) {
      $response[$i] = $response[$i - 1] + $response[$i - 2];
    }

    return $response;
  }
}

print_r(fibonacci(33));
print implode(", ", fibonacci(33));