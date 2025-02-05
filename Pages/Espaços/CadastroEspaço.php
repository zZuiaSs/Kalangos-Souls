<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../index.php');
    exit();
}
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
        <label for="nome">Nome do Espaço:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="tipo">Tipo de Espaço:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="capacidade">Capacidade:</label>
        <input type="number" id="capacidade" name="capacidade" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>

        <button type="submit" class="button">Cadastrar</button>
    </form>
</div>
</body>
</html>