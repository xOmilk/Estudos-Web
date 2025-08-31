<?php
session_start();

// Função para validar CPF com dígitos verificadores
function validarCPF($cpf)
{
    // Remove caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica se tem 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se todos os dígitos são iguais (ex: 111.111.111-11)
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpf[$i] * (10 - $i);
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : 11 - $resto;

    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += $cpf[$i] * (11 - $i);
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : 11 - $resto;

    // Verifica se os dígitos calculados são iguais aos informados
    return ($cpf[9] == $digito1 && $cpf[10] == $digito2);
}

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

    if (empty($data['nome']) || trim($data['nome'] === '')) {
        $erros[] = "Nome é obrigatório";
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email válido é obrigatório";
    }

    if ($data['senha'] !== $data['confirma_senha']) {
        $erros[] = "Senhas não coincidem";
    }

    // Validação do CPF
    if (empty($data['cpf'])) {
        $erros[] = "CPF é obrigatório";
    } elseif (!validarCPF($data['cpf'])) {
        $erros[] = "CPF inválido - dígitos verificadores incorretos";
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
