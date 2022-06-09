<?php
  $arr = [1, 2, 3, 4, 5];

  #indice e quantidade
/*   array_splice($arr, 0, 2); */

  #caso não passe a quantidade, remove do índice 2 para frente
  array_splice($arr, 2);

  print_r($arr);
  echo '<br>';
