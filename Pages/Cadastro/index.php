<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_GET['id']) ? 'Editar Usuário' : 'Cadastrar Usuário'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="fundo">
        <h1><?php echo isset($_GET['id']) ? 'Editar Usuário' : 'Cadastrar'; ?></h1>

        <?php if (!empty($error_message)) { ?>
            <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error_message); ?></div>
        <?php } ?>

        <form action="<?php echo "../../backend/router/userRouter.php?acao=" . htmlspecialchars($acao); ?>" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo htmlspecialchars($usuario['id'] ?? ''); ?>">

            <div class="mb-3">
                <input type="text" class="form-control" name="inp1" placeholder="Nome" value="<?php echo htmlspecialchars($usuario['Nome'] ?? ''); ?>" required>
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" name="inp2" placeholder="Email" value="<?php echo htmlspecialchars($usuario['Email'] ?? ''); ?>" required>
            </div>

            <div class="mb-3">
                <input type="tel" class="form-control" name="inp3" placeholder="Telefone" value="<?php echo htmlspecialchars($usuario['Telefone'] ?? ''); ?>" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="inp4" placeholder="Senha" value="<?php echo htmlspecialchars($usuario['Senha'] ?? ''); ?>" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="inp5" placeholder="Confirmar Senha" value="<?php echo htmlspecialchars($usuario['Confirmar Senha'] ?? ''); ?>">
            </div>

            <button type="submit" id="kayke" class="btn btn-outline-success">Enviar</button>
        </form>
    </div>

</body>
</html>

<!--  -->

<?php

    session_start();

    // if (!isset($_SESSION["id_usuario"])) {
    //     header('Location: ../../Pages/Cadastro/index.php');
    //     exit();
    // }

    require_once __DIR__ . '/../../backend/controller/userController.php';
    $userController = new UserController();

    // Inicializar variáveis com valores padrão
    $usuario = [
        'id' => '',
        'Nome' => '',
        'Email' => '',
        'Telefone' => '',
        'Senha' => '',
        'Confirmar Senha' => ''
    ];

    $acao = "cadastrar";
    $buttonTitle = "Cadastrar";

    // Verificar se é edição
    
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = (int)$_GET['id'];
        // $buttonTitle = "Atualizar";
        $acao = "update";

        // Buscar usuário pelo ID
        $usuario = $userController->getUserById($id);

        if (!$usuario) {
            $error_message = "Usuário não encontrado.";
        }
    }

?>