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
                <div id="mesclar">
                    <svg id="svg-nome" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#FFFFFF"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480v58q0 59-40.5 100.5T740-280q-35 0-66-15t-52-43q-29 29-65.5 43.5T480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480v58q0 26 17 44t43 18q26 0 43-18t17-44v-58q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93h200v80H480Zm0-280q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Z"/></svg>
                    <input type="text" name="nome" placeholder="Nome" autocomplete="off" required>
                </div>
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