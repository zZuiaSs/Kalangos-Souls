<!DOCTYPE html>
<html lang="Pt - Br">
<head>
    <meta charset="UTF-8">l
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <form action="../../Backend/router/loginRouter.php" method="POST">  
        <input type="hidden" name="usuarioId" value="<?php echo $usuario["id"]  ?>">
        <input type="text" name = "nome" value="<?php echo $usuario["nome"] ?>"> 
        <input type="pasword" name ="senha" value="<?php echo $usario["senha"] ?>">
        <button type="submit"><?php echo $variavel ?></button>
    </form>    
    
</body>
</html> 