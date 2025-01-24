<?php

    require_once __DIR__ . "../../Controller/loginController.php";

    $loginController = new loginController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'validarLogin':
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];

                if (!(empty($nome) || empty($senha))) {

                    $resposta = $loginController->login($nome, $senha);

                    if ($resposta) {
                        header("Location: ../../Pages/Home/index.php");
                    } else {
                        header("Location: ../../Pages/Login/index.php");
                        $nome = "";
                        $senha = "";
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