<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario php</title>
    <link rel="stylesheet" href="./style.css">
    <style>

    </style>
</head>

<body>

    <div class="container">
        <h1>Formulário Em PHP (Validação)</h1>

        <?php if ($sucesso): ?>
            <div class="sucesso">
                <strong>Sucesso!</strong> Formulário enviado com sucesso!<br>
                <strong>Dados recebidos:</strong><br>
                Nome: <?php echo $nome; ?><br>
                Email: <?php echo $email; ?><br>
                Data de Nascimento: <?php echo $data_nascimento; ?><br>
                Telefone: <?php echo $telefone; ?><br>
                Login: <?php echo $login; ?><br>
                CEP: <?php echo $cep; ?><br>
                Endereço: <?php echo $endereco; ?><br>
                CPF: <?php echo $cpf; ?>
            </div>
        <?php endif; ?>

        <form action="./formulario.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>

            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

            </div>

            <div class="form-group">
                <label for="confirma_senha">Confirma senha:</label>
                <input type="password" id="confirma_senha" name="confirma_senha" required>

            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>

            </div>

            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required>
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" placeholder="12345678" required>

            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>

            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="12345678900" required>

            </div>

            <div class="button-group">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>

        </form>
    </div>

</body>

</html>