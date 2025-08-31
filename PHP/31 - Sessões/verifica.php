<?php
session_start();

// Verifica se os dados foram enviados via POST
if (!isset($_POST['login']) || !isset($_POST['senha'])) {
    header('Location: ./login.php');
    exit();
}

$login_correto = 'admin';
$senha_correta = 'admin';

$login = $_POST['login'];
$senha = $_POST['senha'];

$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;

if ($login_correto != $login || $senha_correta != $senha) {
    $_SESSION['auth'] = false;
    header('Location: ./login.php');
    exit();
} else {
    $_SESSION['auth'] = true;
    header('Location: ./login.php');
    exit();
}
