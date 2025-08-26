<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
        'nome' => $_POST['nome'] ?? '',
        'email' => $_POST['email'] ?? '',
        'data_nascimento' => $_POST['data_nascimento'] ?? '',
        'senha' => $_POST['senha'] ?? '',
        'confirma_senha' => $_POST['confirma_senha'] ?? '',
        'telefone' => $_POST['telefone'] ?? '',
        'login' => $_POST['login'] ?? '',
        'cep' => $_POST['cep'] ?? '',
        'endereco' => $_POST['endereco'] ?? '',
        'cpf' => $_POST['cpf'] ?? ''
    ];

    $_SESSION['form_data'] = $data;

    // array de erros
    $erros = [];

    if (empty($data['nome'])) {
        $erros[] = "Nome é obrigatório";
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email válido é obrigatório";
    }

    if ($data['senha'] !== $data['confirma_senha']) {
        $erros[] = "Senhas não coincidem";
    }

    //
    if (!empty($erros)) {
        $_SESSION['form_errors'] = $erros;
        $_SESSION['form_success'] = false;
    } else {
        $_SESSION['form_success'] = true;
        unset($_SESSION['form_errors']);
    }
}

// Redirecionamento
header('Location: ./formulario.php');