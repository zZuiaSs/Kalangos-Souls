<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "reservas";

    // Conectar ao MySQL
    $conn = new mysqli($host, $user, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    if (isset($_GET['acao']) && $_GET['acao'] == 'excluir' && isset($_GET['id_espaco'])) {
        $id = $_GET['id_espaco'];
        $sql = "DELETE FROM espaco WHERE id_espaco = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        header("Location: index.php");
        exit();
    }

    $sql = "SELECT * FROM espaco";
    $result = $conn->query($sql);

?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Espaços</title>
    <link rel="stylesheet" href="espaço.css">
</head>
<body>
    <div class="fundo">
        <h2>Espaços Cadastrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id_espaco']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['tipo']}</td>
                        <td>{$row['capacidade']}</td>
                        <td>{$row['descricao']}</td>
                        <td>
                            <a href='index.php?acao=excluir&id_espaco={$row['id_espaco']}' style='color: red;'>Excluir</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum espaço cadastrado</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="CadastroEspaço.php">Cadastrar novo espaço</a>
    </div>
</body>
</html>

<?php
    // Fechar conexão
    $conn->close();
?>