<?php

    session_start();
    
    
    require_once __DIR__ . '../../../Backend/Controller/userController.php';
    $userController = new userController();

    $usuario = [
      'id' => '',
      'Nome' => '',
      'Senha' => '',
      'Email' => '',
      'Telefone' => '',
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

<!-- H T M L -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>

  <div class="posicao">
    <div class="fundo">
      <h1 id="texto"></h1>

      <form action="<?php echo "../../Backend/Router/userRouter.php?acao=cadastrar"?>" method="POST">
        <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $usuario['Nome'];?>" required autocomplete="off">
        <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo $usuario['Senha']; ?>" required autocomplete="off">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $usuario['Email']; ?>" required autocomplete="off">
        <input type="tel" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $usuario['Telefone']; ?>" required autocomplete="off">

        <button type="submit" id="kayke">Enviar</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>