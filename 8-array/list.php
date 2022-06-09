<?php

  $pessoa = ["Daniel", 29, "Programador", "Brasileiro"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $nacionalidade) = $pessoa;

  echo $nome ."<br>";
  echo $idade ."<br>";
  echo $profissao ."<br>";
  echo $nacionalidade ."<br>";
  