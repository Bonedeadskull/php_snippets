<?php

function isPrime($n) : bool {
  if($n == 1) { return true; }
  if($n == 1) { return false; }
  if($n % 2 == 0) { return false; }
  $max = sqrt($n);
  for ($i=3; $i < $max; $i++) {
    if($n%$i == 0)
    {
      return false;
    }
  }
  return true;
}

$a = isPrime(4);
var_dump($a);
