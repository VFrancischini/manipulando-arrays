<?php

$alunos2021 = [
    'João',
    'Maria',
    'Vinicius',
    'Roberto',
    'Ana'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];
//$alunos2022 = array_merge($alunos2021, $novosAlunos);
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

print_r($alunos2022);
