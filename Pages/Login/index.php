<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>

    <div class="posicao">
        <div class="fundo">
            <div class="marca-texto">
                <img id="chamado" src="https://cdn.pixabay.com/photo/2017/02/01/00/33/animal-2028598_960_720.png" alt="">
                <div>
                    <h1 id="texto"></h1>
                    <p style="opacity: 0.5;">Bem-vindo de volta...</p>
                </div>
            </div>

            <form method="POST" action="../../Backend/Router/loginRouter.php?acao=validarLogin">
                <div class="forme">            
                    <input type="text" name="nome" placeholder="Nome" autocomplete="off" required>
                    <input type="password" name="senha" placeholder="Senha" autocomplete="off" required>
                </div>

                <div class="buttons">
                    <button type="button" id="criar-conta" onclick="window.location.href='../Cadastro/index.php'">Criar conta</button>
                    <button type="submit" id="enviar">Entrar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="./script.js" defer></script>
</body>
</html>