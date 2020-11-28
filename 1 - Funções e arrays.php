<?php
$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];

// a) Uma função que retorne o nome do funcionário mais jovem;

function mais_jovem($f){
  $ret=$f[0];
  for ($i=1; $i < count($f); $i++) {
      $ii=$f[$i];
  }
  return $ret['nome'];
}
echo mais_jovem($funcionarios);

// b) Uma função que gere um novo array agrupando os funcionarios por organizacao (organização como index);

function agrupar_por_organizacao($f){
  return ordenar_string($f,'organizacao');
}
imprimir(agrupar_por_organizacao($funcionarios));

// c) Uma função que retorne a média de salários;

function media($f)
{
  $sum=0;
  foreach ($f as $ii) {
    $sum+=$ii['salario'];
  }
  return $sum/count($f);
}
echo media($funcionarios);

// d) Uma função que ordene os funcionarios pelo nome;

function ordenar_por_nome($f){
  return ordenar_string($f,'nome');
}
imprimir(ordenar_por_nome($funcionarios));

// Funções complementares

function ordenar_string($f,$key)
{
  usort($f, function($a,$b){return strcmp($a['organizacao'],$b['organizacao']);});
  return $f;
}
function imprimir($f){
  foreach ($f as $value) {
    echo "<br>[";
    foreach ($value as $key => $value2) {
      echo "<br>&nbsp&nbsp&nbsp$key : $value2";
    }
    echo "<br>]<br>";
  }
}
?>
