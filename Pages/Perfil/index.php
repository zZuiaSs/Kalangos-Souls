    <!-- session_start();

    require_once __DIR__ . "../../../Backend/db/database.php";

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "reservas";

    $conn = new mysqli($host, $user, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    $usuario = $_SESSION['nome'];
    
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

    $sql = "SELECT * FROM usuario WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

?> -->

<!-- H T M L -->

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
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome'] ?? ''); ?>" placeholder="Nome" required>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email'] ?? ''); ?>" placeholder="Email" required>
                <input type="text" id="senha" name="senha" value="<?php echo htmlspecialchars($usuario['senha'] ?? ''); ?>" placeholder="Senha" required>
                <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($usuario['telefone'] ?? ''); ?>" placeholder="Telefone" required>

                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>
</html>
