<?php
// Configurações do banco de dados
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

// Buscar os espaços cadastrados
$sql = "SELECT * FROM espaco";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Espaços</title>
</head>
<body>
    <h2>Espaços Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Capacidade</th>
            <th>Descrição</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['tipo']}</td>
                    <td>{$row['capacidade']}</td>
                    <td>{$row['descricao']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum espaço cadastrado</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="CadastroEspaço.php">Cadastrar novo espaço</a>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
