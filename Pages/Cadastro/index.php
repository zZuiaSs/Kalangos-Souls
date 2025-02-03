<!-- P H P -->

<?php

  session_start();

  require_once __DIR__ . '../../../Backend/Controller/userController.php';
  require_once __DIR__ . '../../../Backend/Router/userRouter.php';
  $userController = new userController();

  $usuario = [
    'id' => '',
    'Nome' => '',
    'Senha' => '',
    'Email' => '',
    'Telefone' => ''
  ];

  $mensagem_erro = "Conta já criada";

?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>

  <link rel="stylesheet" href="./cadastro.css">
</head>

<body>

  <div class="container">
    <div class="fundo">
      <div class="titulo">
        <div class="fechar-texto">
          <button id="fechar">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000000"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg>
          </button>
          <h1 id="texto"></h1>
        </div>

        <div>
          <img id="chamado" src="https://cdn.pixabay.com/photo/2017/02/01/00/33/animal-2028598_960_720.png" alt="">
          <p>cadastre-se na alugossauro e<br>faça coisas incríveis...</p>
        </div>
      </div>

      <div class="form-group">
        <form action="<?php echo "../../Backend/Router/userRouter.php?acao=cadastrar"?>" method="POST">
          <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $usuario['Nome'];?>" required autocomplete="off">
          <input type="text" class="form-control" name="senha" placeholder="Senha" value="<?php echo $usuario['Senha']; ?>" required autocomplete="off">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $usuario['Email']; ?>" required autocomplete="off">
          <input type="text" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $usuario['Telefone']; ?>" required autocomplete="off">

          <div class="submit-area">
            <div id="mensagem_erro"><?php echo $mensagem_erro; ?></div>
            <button type="submit" id="kayke">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- S C R I P T -->
  <script src="script.js"></script>
</body>
</html>