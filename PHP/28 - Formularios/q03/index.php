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
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .result {
            display: grid;
            column-gap: 20px;
            grid-template-columns: 1fr 1fr;
        }

        .result p {
            border: 1px solid red;
            padding: 10px;
            border-radius: 8px;
        }
    </style>

</head>

<body>

    <form method="GET">
        <label for="">1 Numero
            <input required name="number1" type="text" placeholder="Digite um numero">
        </label>

        <label for="">2 Numero
            <input required name="number2" type="text" placeholder="Digite um numero">
        </label>

        <button type="submit">Enviar</button>
    </form>

    <?php
    include_once './process.php'
    ?>

</body>

</html>