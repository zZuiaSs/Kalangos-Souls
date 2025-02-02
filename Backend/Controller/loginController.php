<?php
    
    include_once __DIR__ . "../../db/database.php";

    class loginController {
        private $conn;

        public function __construct() {
            $database = new Database();                                          
            $this->conn = $database->connect();
        }

        public function login($nome, $senha) {
            try {
                $sql = "SELECT * FROM usuario WHERE nome = :nome AND senha = :senha";
                $stmt = $this->conn->prepare($sql);
    
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":senha", $senha);
    
                $stmt->execute();
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ($usuario) {
                    session_start();
                    $_SESSION["nome"] = $usuario["nome"];
                    $_SESSION["senha"] = $usuario["senha"];
                    return true;

                } else {
                    return false;
                }

            } catch (\Exception $e) {
                echo "Usuário não cadastrado | Erro: " . $e->getMessage();
            }

        }

        public function logout() {
            session_destroy();
            header("Location: ../../Pages/Login/index.php");
            exit();
        }
    }

?>