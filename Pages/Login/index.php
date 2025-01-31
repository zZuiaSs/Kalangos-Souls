<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="posicao">
        <div class="fundo">
            <h1 id="texto"></h1>

            <form method="POST" action="../../Backend/Router/loginRouter.php?acao=validarLogin">
                <input type="text" name="nome" placeholder="Nome" autocomplete="off" required>
                <input type="text" name="senha" placeholder="Senha" autocomplete="off" required>

                <div class="buttons">
                    <button type="button" id="criar-conta" onclick="window.location.href='../Cadastro/index.php'">Criar conta</button>
                    <button type="submit" id="enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="./script.js" defer></script>
</body>
</html>