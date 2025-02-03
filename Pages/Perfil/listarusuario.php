<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: ../../index.php');
    exit();
}

// Altere o controlador para o controller dos usuários
require_once __DIR__ . '/../../backend/controller/userController.php';

// Instancia o controlador de usuários
$userController = new UserController();

// Pega todos os usuários
$usuarios = $userController->getAllUsers();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="./home.css">
</head>
<body>
<div class="container">
        <a href="../cadastrar/index.php" class="button">Cadastrar</a>
        <h2>Lista de Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuario) {
                ?>
                    <tr>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['senha']; ?></td>

                        <td class="action-buttons">

                            <!-- Link para editar o usuário -->
                            <a href="../../Backend/Router/userRouter.php?acao=update"<?php echo $usuario['id']; ?> class="button">Editar</a>

                            <!-- Formulário para deletar o usuário -->
                            <form action="../../Backend/Router/userRouter.php?acao=deletar" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $usuario['id']; ?>">
                                <button type="submit" name="deletar" class="button deletar-button">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
