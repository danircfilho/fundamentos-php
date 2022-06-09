<?php
  include "teste.php";
  //Include não para a aplicação, gera um "warning" que é um erro que pode ser ocultado...
  include "testeausente.php";
?>

<p>Este parágrafo foi escrito após o include!</p>
<p>Impressão de código PHP no HTML (será a variável $a): <?php echo $a; ?></p>