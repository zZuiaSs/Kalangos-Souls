<?php

    require_once __DIR__ . "../../Controller/loginController.php";
    $loginController = new loginController();

    session_start();
 
    if (!isset($_SESSION['id_usuario'])) { 
        header('Location: ../../Pages/Login/index.php');
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($_GET["acao"]) {

            case 'validarLogin':
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];

                if (!(empty($nome) || empty($senha))) {

                    $resposta = $loginController->login($nome, $senha);

                    if ($resposta) {
                        $_SESSION['usuario_logado'] = $usuario;
                        header("Location: ../../Pages/Home/index.php");
                    } else {
                        header("Location: ../../Pages/Login/index.php");
                        $nome = "";
                        $senha = "";
                    }
                
                } else {
                    header("Location: ../../Pages/Login/index.php");
                }
                break;
            
            default:
                echo "Ação não encontrada...";
                break;
        }

    }

?>