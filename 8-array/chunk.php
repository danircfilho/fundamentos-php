<?php

  $arr = range(1, 10);

  #será divido em 2 partes (array, parte a ser dividida)
  $arr_dividido = array_chunk($arr, 5);

  print_r($arr_dividido);
  echo "<br>";

  #impressão de um dos arrays
  print_r($arr_dividido[1]);
  