<?php

    require_once __DIR__ . "/../Controller/loginController.php";
    $userController = new userController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'cadastrar':
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];

                if (!(empty($nome) || empty($senha) || empty($email) || empty($telefone))) {
                    $resposta = $userController->CreateUser($nome, $senha, $email, $telefone);

                    if ($resposta) {
                        header("Location: ../../pages/home/index.php");
                    }
                }
                break;

            case "update":
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];

                if (!(empty($nome) || empty($senha))) {
                    $resposta = $userController->UpdateUser($_POST["idUsuario"], $nome, $senha, $email, $telefone);
                    
                    if ($resposta) {
                        header("Location: ../../pages/home/index.php");
                    }
                }
                break;

            case "deletar":
                $resultado = $userController->DeleteUser($_POST["idUsuario"]);

                if ($resultado) {
                    header("Location: ../../pages/home/index.php");
                }
            
            default:
                echo "nao achei nenhuma das opções";
                break;
        }

    }

?>