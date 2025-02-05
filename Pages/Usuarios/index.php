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

// Excluir usuário
if (isset($_GET['acao']) && $_GET['acao'] == 'excluir' && isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];
    $sql = "DELETE FROM usuario WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    header("Location: index.php");
    exit();
}

// Buscar os usuários cadastrados
$sql = "SELECT * FROM usuario"; // Certifique-se de que o nome da tabela está correto
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuários</title>
    <link rel="stylesheet" href="./usuarios.css">
</head>
<body>
    <div class="fundo">
        <h2>Usuários cadastrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id_usuario']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='index.php?acao=excluir&id_usuario={$row['id_usuario']}' style='color: red;'>Excluir</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário cadastrado</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="../Cadastro/index.php"><button>Cadastrar novo usuário</button></a>
    </div>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
