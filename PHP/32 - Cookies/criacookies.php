<?php

$nome = $_GET['nome'] ?? '';
$cidade = $_GET['cidade'] ?? '';

$pessoa = [
    'nome' => $nome,
    'cidade' => $cidade
];

// Converte array para JSON antes de salvar
setcookie('pessoa', json_encode($pessoa));

header('Location: ./mensagem.php');
