<?php
function random_string($length) {
  $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  // start with a empty string
  $random_string = '';
  // count valid chars
  $num_valid_chars = strlen($charset);

  for ($i = 0; $i < $length; $i++) {
    // pick a random number from 1 to $num_valid_chars
    $random_pick = mt_rand(1, $num_valid_chars);

    // take the random character out of the string of $charset
    // subtract 1 from $random_pick because strings are indexed starting at 0, and we started picking at 1
    $random_char = $charset[$random_pick-1];

    // add the charter to end of $random_string
    $random_string .= $random_char;
  }

  return $random_string;
}