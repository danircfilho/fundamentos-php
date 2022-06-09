<?php
  $x = 0;
  $y = 0;

  while ($x <= 10) {
    echo $x++ ."<br>";    
  }

  echo "<br>";

  do{
    echo $y++ ."<br>";    
  } while($y <= 10);

  echo "<br>";

  //Exemplo para impressão de strings em um array
  $arr = [2, "Daniel", "Olá Mundo!", [2], "Hoje é sábado!", 2.6, true, "Sim", false];

  //Função para contar o array - count()
  $a = count($arr);
  //Variável para receber um novo array
  $b = 0;

  while ($b < $a) {
    if (is_string($arr[$b])) {
      echo $arr[$b] ."<br>";
    }
    $b++;
  }
?>