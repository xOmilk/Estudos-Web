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
            align-items: center;
            justify-content: center;
        }

        .result {
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>

    <form method="get">
        <label for="age">
            Idade
            <input name="age" id="age" type="text">
        </label>
        <button type="submit">Enviar</button>
    </form>
    <?php include_once 'validation.php'; ?>


</body>

</html>