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
            justify-content: center;
            align-items: center;
            flex-flow: column;
            gap: 1rem;
        }

        .result {
            height: 20dvh;
        }
    </style>

</head>

<body>
    <form action="" method="POST">
        <label for="">
            Nome do aluno
            <input required name="nome" type="text" placeholder="Digite o nome do aluno">
        </label>

        <label for="">
            1 Nota
            <input required name="nota1" type="number" placeholder="Digite a 1 nota">
        </label>

        <label for="">
            2 Nota
            <input required name="nota2" type="number" placeholder="Digite a 2 nota">
        </label>

        <label for="">
            3 Nota
            <input required name="nota3" type="number" placeholder="Digite a 3 nota">
        </label>

        <button type="submit">Enviar</button>

    </form>

    <?php
    if (
        isset($_POST['nome']) &&
        isset($_POST['nota1']) &&
        isset($_POST['nota2']) &&
        isset($_POST['nota3'])
    ) {
        $name = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;


        if ($media >= 6) {
    ?>
            <div class="result">
                <p style="color: green;">Aprovado, Aluno<?= $name ?> com media:<?= $media ?></p>
            </div>
        <?php
        } else {
        ?>
            <div class="result">
                <p style="color: red;">Reprovado, Aluno "<?= $name ?>" com media:<?= $media ?></p>
            </div>

    <?php
        }
    }
    ?>

</body>

</html>