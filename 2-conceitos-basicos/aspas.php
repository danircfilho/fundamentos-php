<?php
  //para interpretar texto tanto faz aspas simples ou duplas
  echo "Este é um texto com aspas duplas. <br>";
  echo 'Este é um texto com aspas simples. <br>';
  echo "Este é um texto com aspas duplas externas para 'destacar internamente com aspas simples'.  Pode ser inverso o conceito. <br>";

  //para interpretar variáveis é necessário aspas duplas
  $idade = 45;
  echo "Minha idade é $idade anos (aspas duplas para intepretar variáveis). <br>";
  echo 'Minha idade é $idade anos (aspas simples interpreta como texto).';
?>