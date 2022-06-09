<?php
  //FOR é a instrução mais utilizada...
  //Para gravar é: CONTADOR (variável declarada); CONDIÇÃO; INCREMENTO/DECREMENTO (separado por ';')
  $nome = "Daniel";

  for($i = 0; $i <= 10; $i++) {
    //aqui pode se ter todas as intruções exemplos:
    echo "Teste do loop : $i <br>";
    
    if($i === 5) {
      echo "Impressão de variáveis, exemplo: $nome <br>";
    }
    
    if($i === 6) {
      echo "Impressão de break <br>";
      break;
    }
  }
?>