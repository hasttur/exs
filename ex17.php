<?php

function solution($S) {
  $array = preg_split('//', $S, -1, PREG_SPLIT_NO_EMPTY);

  $bees = false;
  $response = true;

  for ($i=0; $i < count($array); $i++) { 
    if ($array[$i] == "b") {
      $bees = true;
    }
    else if($bees && $array[$i] == "a"){
      $response = false;
    }
  }

  return $response;
}