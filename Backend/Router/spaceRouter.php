<?php

session_start();
require_once __DIR__ . "../../Controller/spaceController.php";
$spaceController = new spaceController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    switch ($_GET["acao"]) {

        case 'update':
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $tipo = $_POST["tipo"]; 
            $capacidade = $_POST["capacidade"];
            $descricao = $_POST["descricao"];
            $descricao = $_POST["descricao"];
            
            $resposta = $spaceController->updateSpaces($id, $nome, $tipo, $capacidade, $descricao);
        
            if ($resposta) {
                header("Location: ../../Pages/Espaços/index.php");
                exit;
            } else {
                echo "Erro ao atualizar o espaço...";
                exit;
            }
            break;
        
        default:
            echo "Ação não encontrada...";
            break;
    }

}

?>