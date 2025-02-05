<?php
session_start(); // Iniciar a sessão

$id_usuario = $_SESSION['id'] ?? $_GET['id'];

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

// Atualizar perfil
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE usuario SET nome = ?, email = ?, senha = ?, telefone = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nome, $email, $senha, $telefone, $id_usuario);
    $stmt->execute();

    $_SESSION['nome'] = $nome;
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
    <link rel="stylesheet" href="./perfil.css">
</head>
<body>
    <div class="fundo-editar-perfil">
        <div class="editar-perfil">
            <h2>Editar Perfil</h2>
            <form method="POST" action="../../Backend/Router/userRouter.php?acao=update">
                <input type="hidden" name="idUsuario" value="<?php echo htmlspecialchars($usuario['id_usuario'] ?? ''); ?>">
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome'] ?? ''); ?>" placeholder="Nome" required>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email'] ?? ''); ?>" placeholder="Email" required>
                <input type="password" id="senha" name="senha" value="<?php echo htmlspecialchars($usuario['senha'] ?? ''); ?>" placeholder="Senha" required>
                <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($usuario['telefone'] ?? ''); ?>" placeholder="Telefone" required>
                <button class="form-control" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>
</html>