<h1>Require no PHP</h1>
<?php 
  //o require é obrigatório, sua ausencia gera um erro fatal e 'crasha' a sua aplicação!
  require "teste.php";
  require "arquivos/exemplo-codigo.php";
?>
<p>Arquivo do Require</p> 

<?php 
  echo "Minha idade é: $idade <br>"
?>

<h2>Acima a variável é da pasta de arquivos...</h2>

<?php 
  require "teste.php";
?>
