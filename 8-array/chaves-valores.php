<?php

  $carro = [
    'marca' => 'Audi',
    'cor' => 'vermelho',
    'ano' => 2022,
    'teto_solar' => true
  ];

  $descobrirChaves = array_keys($carro);

  print_r ($descobrirChaves);
  echo '<br>';

  $descobrirValores = array_values($carro);

  print_r ($descobrirValores);
  echo '<br>';

  #verificar se a chave existe
  if (array_key_exists('pais de origem', $carro)) {
    echo 'A chave existe';
  } else {
    echo ' A chave não existe <br>';
  }