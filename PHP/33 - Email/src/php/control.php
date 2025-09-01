<?php
session_start();

$conteudo = $_POST;

// Verifica se ALGUM campo está vazio ou não foi enviado
if (empty($conteudo['destiny']) || empty($conteudo['title']) || empty($conteudo['body'])) {
    $_SESSION['error'] = 'Todos os campos são obrigatórios. Tente novamente.';
    header('Location: ../../index.php');
    exit();
} else {
    $_SESSION['message'] = [
        'title' => $conteudo['title'],
        'destiny' => $conteudo['destiny'],
        'body' => $conteudo['body']
    ];
    $_SESSION['sucess'] = 'Enviando email... Aguarde.';
    header('Location: ./send_mail.php');
    exit();
}
