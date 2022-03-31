<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 21
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);

var_dump($nome, $nota, $idade);

print_r(compact('nome', 'idade', 'nota'));
