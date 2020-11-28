<?php

// 2 - Crie uma função para imprimir em tela o menor número inteiro divisível
// por 4, 5 e 6 ao mesmo tempo, utilizando as seguintes técnicas:
// - Recurção
function recursivo(){
$ret=0;
find_loop(6,$ret);
return $ret;
}
function find_loop($i,&$ret){
if
(
$i % 4 == 0 &&
$i % 5 == 0 &&
$i % 6 == 0
)
$ret=$i;
else
find_loop($i+1,$ret);
}
// - Com laços de repetição.
function repeticao()
{
$i=6;
while
(
$i % 4 != 0 ||
$i % 5 != 0 ||
$i % 6 != 0
)
{
$i++;
}
return $i;
}
// Qual técnica gastária mais desempenho da máquina?
  /*
   a recurção gastaria mais desenpenho da maquina, memoria para
   ser mais especifico, pois ela esta empilnhando as chamadas de funçoes no stack.
  */
imprimir(recursivo());
imprimir(repeticao());

// Funções complementares
function imprimir($value){
  echo "<p>$value</p>";
}


 ?>
