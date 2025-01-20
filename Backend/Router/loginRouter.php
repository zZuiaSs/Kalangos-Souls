<?php

    require_once __DIR__ . "/../controller/loginController.php";

    $loginController = new LoginController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'validarLogin':
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];

                if (!(empty($nome) || empty($senha))) {

                    $resposta = $loginController->Login($nome, $senha);

                    if ($resposta) {
                        header("Location: ../../Pages/Login/index.php");
                    } else {
                        echo "Usuário não encontrado...";
                    }
                
                } else {
                    echo "Todos os campos são obrigatórios...";
                }
                break;
            
            default:
                echo "Ação não encontrada...";
                break;
        }

    }

?>