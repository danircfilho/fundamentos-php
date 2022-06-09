<?php
  //Criar objeto
  class Escola {
    //método
    function falar() {
      echo "Olá mundo!";
    }
  }

  //Criar um novo objeto
  $aluno = new Escola();

  $aluno -> nome = "Daniel";

  echo "Meu nome é $aluno->nome";

  echo "<br>";

  $aluno -> falar();
?>