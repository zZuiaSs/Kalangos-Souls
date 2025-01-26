<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- <img class="fund" src="https://www.booking-wp-plugin.com/wp-content/uploads/2019/07/Banner-31a-jpg.webp" alt=""> -->
    <div class="posicao">
        <div class="fundo">
            <h1>Login</h1>

            <form method="POST" action="../../Backend/Router/loginRouter.php?acao=validarLogin">
                <input type="text" name="nome" placeholder="Nome" autocomplete="off" required>
                <input type="password" name="senha" placeholder="Senha" autocomplete="off" required>

                <div class="buttons">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    <button type="button" onclick = "window.location.href='../Cadastro/index.php'">Criar conta</button>
=======
                    <button id="criar-conta">Criar conta</button>
>>>>>>> Stashed changes
=======
                    <button id="criar-conta">Criar conta</button>
>>>>>>> Stashed changes
                    <button type="submit" id="enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<!-- S T Y L E -->

<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: "Roboto Slab";
        font-size: 20px;
    }

    h1 {
        font-size: 40px;
        color: black;
    }

    .posicao {
        width: 100%;
        height: 100%;
        display: flex;

        justify-content: center;
        align-items: center;
    }

    body {
        background-color:rgb(255, 255, 255);
        display: flex;
        width: 100vw;
        height: 100vh; 
    }

    .fundo {
        position: absolute;
        display: flex;
        background-color: rgb(255, 255, 255);
        box-shadow: 0 0px 30px rgba(0, 0, 0, 0.25);
        justify-content: center;
        align-items: center;    
        flex-direction: column;
        height: 400px;
        width: 300px;
        padding: 20px;
        border-radius: 20px;
        gap: 50px;
    }

    input {
        background-color:rgb(230, 230, 230);
        color: black;
        display: flex;
        padding: 10px;
        width: auto;
        border: none;
        border-radius: 10px;
        outline: none;
        caret-color: green;
        font-size: 20px;
    }

    form {
        width: auto;
        height: auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    input:focus {
        box-shadow: inset 0 0px 3px green;
    }

    .buttons {
        margin-top: 25px;
        display: flex;
        gap: 10px;
    }

    #enviar {
        padding: 7px;
        border: 1px solid green;
        background: none;
        color: green;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s ease;
        width: 100%;
    } #enviar:hover {
        background-color: green;
        color: white;
    }

    #criar-conta {
        text-align: center;
        text-decoration: none;
        padding: 7px;
        background: none;
        color: green;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        border: none;
    } #criar-conta:hover {
        background-color: rgba(0, 128, 0, 0.2);
    }

    form {
        width: 100%;
        height: auto;
    }

</style>