<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['name']) && isset($_GET['birthdate'])) {
        $nome = $_GET['name'];
        $nascimento = new DateTime($_GET['birthdate']);
        $hora_atual = new DateTime('now');

        $diferenca = $nascimento->diff($hora_atual);

        echo ("<br>$nome, você tem $diferenca->y anos de idade");
    }
}
