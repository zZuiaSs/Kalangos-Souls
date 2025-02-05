<?php

    session_start();

    require_once __DIR__ . "../../../Backend/db/database.php";

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
    
    $usuario = $_SESSION['nome'];
    
    
    // Atualizar perfil
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "UPDATE usuario SET nome = ?, email = ? WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nome, $email, $id_usuario);
        $stmt->execute();

        $_SESSION['nome'] = $nome;
        header("Location: index.php");
        exit();
    }


    // Buscar dados do usuário
    $sql = "SELECT * FROM usuario WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../Home/home.css">
</head>
<body>
    <div class="fundo-editar-perfil">
        <div class="editar-perfil">
            <h2>Editar Perfil</h2>
            <form method="POST">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome'] ?? ''); ?>" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email'] ?? ''); ?>" required>
                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
