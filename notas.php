<?php

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinicius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
print_r($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));
