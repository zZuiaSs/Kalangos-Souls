<?php

    require_once __DIR__ . "../../../Backend/Controller/userController.php";
    $userController = new userController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'cadastrar':
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                
                $resposta = $userController->createUser($nome, $senha, $email, $telefone);
            
                if ($resposta === true) {
                    header("Location: ../../Pages/Login/index.php");
                    exit;
                } else {
                    header("Location: ../../Pages/Cadastro/index.php");
                    exit;
                }
                break;
            
            case "update":
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $senha2 = $_POST["senha2"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];

                if (!(empty($nome) || empty($senha))) {
                    $resposta = $userController->UpdateUser($_POST["idUsuario"], $nome, $senha, $senha2, $email, $telefone);

                    if ($resposta) {
                        header("Location: ../../Pages/Login/index.php");
                    }
                }
                break;

            case "deletar":
                $resultado = $userController->DeleteUser($_POST["idUsuario"]);

                if ($resultado) {
                    header("Location: ../../Pages/Home/index.php");
                }
            
            default:
                echo "Ação não encontrada...";
                break;
        }

    }

?>