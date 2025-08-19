<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            height: 100dvh;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
        }

        form {
            gap: 2rem;
            display: flex;
            flex-flow: column;
        }
    </style>

</head>

<body>

    <?php
    // Define o locale para português do Brasil
    setlocale(LC_TIME, 'pt_BR.UTF-8', 'pt_BR', 'Portuguese_Brazil.1252');
    ?>

    <form action="" method="POST">
        <input type="date" name="data">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_POST['data'])) {
        $data = $_POST['data'];
        $dt = new DateTime($data);
        // Formata a data em português
        $dataFormatada = strftime('%A, %d de %B de %Y', $dt->getTimestamp());
        // Primeira letra maiúscula
        $dataFormatada = mb_convert_case($dataFormatada, MB_CASE_TITLE, 'UTF-8');
        echo "<p>Data formatada: <strong>$dataFormatada</strong></p>";
    }
    ?>
</body>

</html>