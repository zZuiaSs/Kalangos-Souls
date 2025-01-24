<?php

    session_start();

    if (!isset($_SESSION["id_usuario"])) {
        header('Location: ../../Pages/Login/index.php');
        exit();
    }

    require_once __DIR__ . '/../../Backend/Controller/userController.php';
    $userController = new userController();

    $usuario = [
        'id' => '',
        'Nome' => '',
        'Email' => '',
        'Telefone' => '',
        'Senha' => '',
    ];

    $acao = "cadastrar";
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $acao = "update";
        $usuario = $userController->getUserById($id);

        if (!$usuario) {
            echo "Usuário não encontrado...";
        }
    }

?>

<!--  --> <!--  --> <!--  -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="fundo">
        <h1>Cadastrar</h1>

        <?php if (!empty($error_message)) { ?>
            <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error_message); ?></div>
        <?php } ?>

        <form action="<?php echo "../../backend/router/userRouter.php?acao=" . htmlspecialchars($acao); ?>" method="POST">
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo htmlspecialchars($usuario['Nome'] ?? ''); ?>" required>
            <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo htmlspecialchars($usuario['Senha'] ?? ''); ?>" required>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo htmlspecialchars($usuario['Email'] ?? ''); ?>" required>
            <input type="tel" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo htmlspecialchars($usuario['Telefone'] ?? ''); ?>" required>

            <button type="submit" id="kayke" class="btn btn-outline-success">Enviar</button>
        </form>
    </div>

</body>
</html>