<?php

    require_once __DIR__ . "../../Controller/userController.php";
    $userController = new userController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'cadastrar':
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $senha2 = $_POST["senha2"];
                $telefone = $_POST["telefone"];

                if (!(empty($nome) || empty($senha) || empty($email) || empty($telefone) || empty($senha2))) {
                    $resposta = $userController->CreateUser($nome, $senha, $senha2, $email, $telefone);

                    if ($resposta) {
                        header("Location: ../../Pages/Home/index.php");
                    }
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
                echo "nao achei nenhuma das opções";
                break;
        }

    }

?>