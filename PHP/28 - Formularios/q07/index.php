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
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        form {
            border: 2px solid black;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        form button {
            padding: 10px;
            border-radius: 8px;
            background-color: green;
            color: white;
            outline: none;
        }

        .result {
            border: 2px solid lightblue;
            padding: 20px;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <h3>Calculadora IMC</h3>
    <form method="get">
        <label for="">Altura</label>
        <input required type="text" name="altura">
        <label for="">Peso</label>
        <input required type="text" name="peso">
        <button type="submit">Enviar</button>
    </form>

    <?php include_once './calculate.php' ?>
</body>

</html>