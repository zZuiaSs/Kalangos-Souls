<?php

    include_once __DIR__ . "../../db/database.php";
 
    // Classe LoginController é responsável pela autenticação de usuários
    class LoginController {
        private $conn; // Variável que armazena a conexão do código com o banco de dados
    
        // Construtor da classe --> inicializa a conexão com o banco de dados
        public function __construct() {
            // Cria uma instância da classe Database para obter a conexão --> objeto criado a partir da classe
            $database = new Database();                                          
            // Armazena a conexão na variável conn      ||      OU SEJA, TUDO ISSO TÁ DENTRO DA VÁRIAVEL conn 
            $this->conn = $database->connect();
        }
    
        // Função do login
        public function login($nome, $senha) {

            try {
                // Prepara a consulta SQL para verificar se o username e a senha correspondem a um usuário
                $sql = "SELECT * FROM usuario WHERE nome = :usuario AND senha = :senha";
                $stmt = $this->conn->prepare($sql);
    
                // Vincula os parâmetros recebidos aos placeholders (inputs) na consulta
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":senha", $senha);
    
                // Executa a consulta no banco de dados
                $stmt->execute();
    
                // Recebe o resultado da consulta
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
                // Verifica se o username e a senha correspondem
                if ($usuario) {
                    // Inicia uma sessão para armazenar os dados do usuário logado
                    session_start();
                    $_SESSION["id_usuario"] = $usuario["id"];
                    $_SESSION["nome"] = $nome["nome"];
                    $_SESSION["senha"] = $usuario["senha"];
    
                    // Retorna verdadeiro para indicar sucesso
                    return true;
                } else {
                    // Retorna falso caso username e senha não correspondam
                    return false;
                }
            } catch (\Exception $e) {
                // Retorna a mensagem de erro para debug
                echo "Erro ao realizar login " . $e->getMessage();
            }

        }
    
        // Função para encerrar a sessão

        public function logout() {
            session_start();
            session_destroy();
        }
    }

?>