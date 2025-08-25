<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100dvh;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        form {
            border: 2px solid black;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .form button {
            padding: 10px;
        }

        .result {
            padding: 20px;
            border: 2px solid green;
            border-radius: 8px;
            display: flex;
            flex-flow: column;
            gap: 10px;
        }
    </style>

</head>

<body>
    <form method="get">
        <div>
            <label>
                Digite numeros separados por virgula
            </label>
        </div>
        <input required type="text" name="array" placeholder="Ex: 1,2,3,4">

        <button type="submit">Enviar</button>
    </form>

    <?php include_once './print_numbers.php' ?>
</body>

</html>