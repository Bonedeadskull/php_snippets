<?php
function isPalindrome($n) : bool {
  $str = strtolower($n);
  $strev = strrev(strtolower($n));
  if($str == $strev) {
    return true;
  }
  return false;
}
