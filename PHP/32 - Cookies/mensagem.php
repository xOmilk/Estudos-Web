<?php

// Verifica se o cookie existe
if (isset($_COOKIE['pessoa'])) {
    // Decodifica o JSON de volta para array
    $usuario = json_decode($_COOKIE['pessoa'], true);

    echo "<h1>Bem-vindo!</h1>";
    echo "<p>Olá, <strong>" . htmlspecialchars($usuario['nome']) . "</strong>!</p>";
    echo "<p>Você é de <strong>" . htmlspecialchars($usuario['cidade']) . "</strong>.</p>";

    echo "<br><a href='formulario.html'>Voltar para criar cookies</a>";
} else {
    echo "<h1>Cookie não encontrado!</h1>";
    echo "<p>Você precisa <a href='formulario.html'>criar o cookie primeiro</a>.</p>";
}
