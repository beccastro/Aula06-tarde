<?php
$variavel=(trim($_POST['variavel1']));
$variavel=(trim($_POST['variavel2']));

$soma= $variavel + $variavel2

$subtração= $variavel1 - $variavel2

$multiplicaçaõ= $varialvel1 * $variavel2

$divisão= $variavel1 / $variavel2

$data = [
    'soma' => $soma,
    'subtração' => $subtração,
    'multiplicação' => $multiplicação,
    'divisão' => $divisão
];

echo json_encode($data);