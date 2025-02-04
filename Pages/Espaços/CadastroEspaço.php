<?php
<<<<<<< Updated upstream

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $descricao = $_POST['descricao'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO espaco (nome,tipo, capacidade, descricao) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $nome, $tipo, $capacidade, $descricao);
=======
>>>>>>> Stashed changes

    if ($stmt->execute()) {
        echo "Espaço cadastrado com sucesso! <a href='index.php'>Cadastrar outro</a>";
    } else {
        echo "Erro ao cadastrar espaço: " . $conn->error;
    }

    // Fechar conexão
    $stmt->close();
    $conn->close();

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Espaço</title>
</head>
<body>
    <h2>Cadastro de Espaço</h2>
    <form action="CadastroEspaço.php" method="post">
        <label for="nome">Nome do Espaço:</label>
        <input type="text" name="nome" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br><br>

        <label for="capacidade">Capacidade:</label>
        <input type="number" name="capacidade" required><br><br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

