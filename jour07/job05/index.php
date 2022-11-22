<?php

function occurrences($str, $char){

  $a = 0;
  $b = 0;

  while (isset($str[$a])) {
      if ($char == $str[$a])
      {
      $b++;
      }
      $a++;
    }
    return $b;
  };

  echo occurrences('bonjour on a tous un jhonnas', 'o');

?>
