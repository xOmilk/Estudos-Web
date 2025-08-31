<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
            height: 100dvh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form {
            border-radius: 10px;
            box-shadow: 1px 1px 4px 6px rgba(0, 0, 0, 0.6);
            padding: 30px;
            background: #969393ff;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .field {
            display: flex;
            flex-flow: column;
            gap: 12px;
        }

        .field label {
            text-decoration: underline;
        }

        .field input {
            padding: 10px;
            border-radius: 10px;
        }

        input[type='submit'] {
            background-color: #eeec93ff;
            transition: all 0.3s;
        }

        input[type='submit']:hover {
            opacity: 50%;
        }
    </style>

</head>

<body>

    <?php
    session_start();

    // Processa logout se solicitado
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: ./login.php');
        exit();
    }
    if (!isset($_SESSION['auth'])) {
    ?>
        <div class="form">
            <p style="color: white;">Faça login na conta</p>
        </div>
    <?php } else if ($_SESSION['auth'] == false) {

    ?>
        <div class="form">
            <p style="color: red;">Você digitou o login errado</p>
        </div>
    <?php } else if ($_SESSION['auth'] == true) {

    ?>
        <div class="form">
            <p style="color: white; font-weight: bolder; border-bottom: 2px solid green;">Você está logado<span style="color: green;"> V</span></p>
            <a href="?logout=true" style="background: #ff6b6b; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">Fazer logout</a>
        </div>
    <?php } ?>

    <form
        class="form"
        action="./verifica.php"
        method="POST">

        <div class="field">
            <label for="login">Login</label>
            <input
                type="text"
                name="login"
                id="login"
                placeholder="Informe o seu login" />
        </div>

        <div class="field">
            <label for="senha">Senha</label>
            <input
                type="password"
                placeholder="Digite a senha"
                name="senha"
                id="senha">
        </div>
        <div class="field">
            <input type="submit" value="Logar">
        </div>
    </form>

</body>

</html>