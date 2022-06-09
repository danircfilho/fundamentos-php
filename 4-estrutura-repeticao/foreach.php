<?php
  //FOREACH é utilizada com ARRAY (o mesmo deve estar disponível)...
  $nomes = ["Daniel", "Mateus", "Pedro", "Maria", "Isabela"];

  $a = "Variável 'a' !!!!";

  foreach($nomes as $i) { //pode ser $nome
    echo "Estes são os nomes nos índices: $i <br>";

    if ($i == "Isabela") {
      echo "Impressão de $nomes[4] e $nomes[0] <br>";
      echo "Impressão da: $a <br>";
    }
  }
?>