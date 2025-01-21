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
        <h1><?php echo isset($_GET['id']) ? 'Editar Usuário' : 'Cadastrar Usuário'; ?></h1>

        <?php if (isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>

        <form action="<?php echo "../../backend/router/userRouter.php?acao=$acao" ?>" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">        
            <input type="text" name="inp1" placeholder="Nome" value="<?php echo $usuario['Nome']; ?>" required>
            <input type="text" name="inp2" placeholder="Email" value="<?php echo $usuario['Email']?>" required> 
            <input type="text" name="inp3" placeholder="Telefone" value="<?php echo $usuario['Telefone']?>" required>
            <input type="text" name="inp4" placeholder="Senha" value="<?php echo $usuario['Senha']; ?>" required> 
            <input type="text" name="inp5" placeholder="Confirmar Senha" value="<?php echo $usuario['Confirmar Senha']?>">
            <button type="button" id="kayke" class="btn btn-outline-success"><?php echo $buttonTitle; ?></button>
        </form>
    </div>

</body>
</html>

<!--  -->

<?php

    session_start();

    if (!isset($_SESSION["id_usuario"])) {
        header('Location: ../../Pages/Home/index.php');
        exit();
    }

    require_once __DIR__ . '/../../backend/controller/userController.php';
    $userController = new UserController();

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

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $buttonTitle = "Atualizar";
        $acao = "update";
        $usuario = $userController->getUserById($id);
        if (!$usuario) {
            echo "Usuário não encontrado.";
        }
    }

?>