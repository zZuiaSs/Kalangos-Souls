<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="fundo">
        <h1>Login</h1>

        <form method="POST" action="../../Backend/Router//loginRouter.php?acao=validarLogin">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="senha" placeholder="Senha">
            
            <button type="submit" id="kayke" class="btn btn-outline-success">Enviar</button>
        </form>
    </div>

</body>
</html>