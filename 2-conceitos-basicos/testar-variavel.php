<?php
  //testar o tipo - alguns exemplos
  $numFloat = 6.9;
  echo var_dump($numFloat);
  echo is_float($numFloat); //1 para verdadeiro...!!!
  echo "<br>";

  $num = 6;
  echo var_dump($num);
  echo is_int($num); //1 para verdadeiro...!!!
  echo "<br>";

  $texto = "Texto - strings";
  echo var_dump($texto);
  echo is_string($texto); //1 para verdadeiro...!!!
  echo "<br>";

  $boolTrue = (2 > 1);
  $boolFalse = (2 < 1);
  echo var_dump($boolTrue);
  echo "<br>";
  echo var_dump($boolFalse);
?>