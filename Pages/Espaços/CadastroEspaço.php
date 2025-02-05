<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Espaço</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<div class="container">
    <h2>Cadastrar Espaço</h2>
    <form action="../../Backend/Router/spaceRouter.php?acao=cadastrar" method="POST">
        <input type="text" id="nome" name="nome" placeholder="Nome do espaço" required>
        <input type="text" id="tipo" name="tipo" placeholder="Tipo de espaço" required>
        <input type="number" id="capacidade" name="capacidade" placeholder="Capacidade" required>
        <textarea id="descricao" name="descricao" placeholder="Descrição" required></textarea>

        <button type="submit" class="button">Cadastrar</button>
    </form>
</div>
</body>
</html>