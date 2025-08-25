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
    </style>

</head>

<body>
    <form method="GET">

        <label for="">Nome
            <input name="name" type="text" placeholder="Digite o seu nome">
        </label>
        <label for="">Data de nascimento
            <input name="birthdate" type="date">
        </label>

        <button type="submit">Enviar</button>
    </form>

    <?php include_once './info.php' ?>


</body>

</html>