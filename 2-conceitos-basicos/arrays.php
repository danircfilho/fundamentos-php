<?php
  //Array comum - índice e valor
  $arrComum = ["Daniel", 47, "São Paulo"];
  //Para impressão de array print_r e não echo
  print_r ($arrComum);
  echo "<br>";
  //Para impressão de array passar o índice
  echo $arrComum[0];
  echo "<br>";

  //Array associativo - índice e valor já passados
  $arrAssociativo = ["nome" => "Daniel", "idade" => 47, "cidade" => "São Paulo"];
  //Para impressão de array pode usar echo passando o índice
  echo $arrAssociativo["nome"];
  echo "<br>";

  //Treinar array
  $pessoa = [
    "nome" => "Daniel",
    "idade" => 45,
    "profissao" => 'Desenvolvedor de Software'    
  ];

  $age = 18;

  if($pessoa['idade'] > $age) {
    echo "O $pessoa[nome] é de maior idade e tem a profissão de $pessoa[profissao].";
  }
?>