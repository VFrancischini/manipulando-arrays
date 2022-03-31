<?php

$notasBimestre1 = [
    'João' => 8,
    'Maria' => 9,
    'Vinicius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

$notasBimestre2 = [
    'João' => 8,
    'Roberto' => 7,
    'Ana' => 10
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

print_r(array_combine($nomesAlunos, $notasAlunos));
print_r(array_flip($alunosFaltantes));
