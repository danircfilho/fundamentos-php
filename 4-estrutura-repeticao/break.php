<?php
//Break para parar a instrução - funciona em IF
  $x = 0;
  $y = 6;

  while ($x <= 10) {
    
    echo "O valor de X é: $x <br>";

    if($x === $y) {
      echo "Loop terminado no $y!";
      break;
    } 

    $x++;
    $x+=2; // incrementa de 2 em 2
  }  
?>