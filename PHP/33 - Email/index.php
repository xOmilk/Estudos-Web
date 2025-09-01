<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body>
    <div id="page">
        <header>
            <h1>PHPMAILER</h1>
        </header>

        <main>
            <form action="./src/php/" method="post">

                <div class="fields-group">
                    <div class="field-row">
                        <label for="destiny">Destinatario</label>
                        <input
                            id="destiny"
                            name="destiny"
                            type="email"
                            placeholder="Email de destino">
                    </div>

                    <div class="field-row">
                        <label for="title">Titulo</label>
                        <input
                            id="title"
                            name="title"
                            type="text"
                            placeholder="Titulo do seu email">
                    </div>

                    <div class="field-row">
                        <label for="body">Corpo do Texto</label>
                        <textarea
                            id="body"
                            name="body"
                            id=""
                            placeholder="Digite o corpo da sua mensagem"></textarea>
                    </div>

                    <div class="field-row">
                        <div id="feedback">
                        </div>
                        <div class="buttons">
                            <button
                                class="reset"
                                type="reset">
                                Limpar
                            </button>
                            <button
                                id="send"
                                type="submit">
                                Enviar Email
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </main>
    </div>
    <script src="./src/js/script.js"></script>
</body>

</html>