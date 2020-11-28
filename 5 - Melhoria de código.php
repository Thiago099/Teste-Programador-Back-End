<?php
// Melhoria de código
// Dado o bloco de código:
function armazenarPessoa($nome,$organizacao,$conhecimentos,$telefones,$emails) {
    $pessoa = new StdClass;
    $pessoa->organizacao = $organizacao;
    $pessoa->nome = $nome;
    $pessoa->conhecimentos = $conhecimentos;
    $pessoa->telefone = $telefones;
    $pessoa->emails=$emails;
    return $pessoa;
}
print_r(
  armazenarPessoa(
    "Nome",
    "Organização",
    [
        "Js",
        "Php",
        "C#",
        "NodeJs",
    ],
    [
      "Telefone1",
      "Telefone2",
    ],
    [
      "Email1",
      "Email2",
    ]
));

?>
