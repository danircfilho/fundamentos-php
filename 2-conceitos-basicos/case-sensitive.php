<?php
  //Não é case sensitive para as instruções da linguagem
  echo "Teste 01 <br>";
  eCho "Teste 02 <br>";
  ECHO "Teste 03 <br>";

  //Variáveis são case sensitive
  $nome = "Daniel";
  $NOMEUPPERCASE = "DANIEL";
  echo "$nome <br>";
  echo "$NOME <br>"; /* irá gerar um erro */
  echo "$NOMEUPPERCASE <br>";
?>
