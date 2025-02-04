<?php
    
    include_once __DIR__ . "/../db/database.php";
    
    class userController {
        private $conn;
    
        public function __construct() {
            $objDb = new Database();
            $this->conn = $objDb->connect();
        }

        public function getAllUsers() {
            try {
                $sql = "SELECT * FROM usuario ORDER BY id ASC";
                $db = $this->conn->prepare($sql);
                $db->execute();
                return $db->fetchAll(PDO::FETCH_ASSOC);
                
            } catch (\Exception $th) {
                return $th->getMessage();
            }
        }

        public function createUser($nome, $email, $senha, $telefone) {
            try {
                $sql_username = "SELECT * FROM usuario WHERE nome = :nome";
                $stmt_username = $this->conn->prepare($sql_username);
                $stmt_username->bindParam(":nome", $nome);
                $stmt_username->execute();
                $result_username = $stmt_username->fetch(PDO::FETCH_ASSOC);
    
                if ($result_username) {
                    return "Usuário já cadastrado...";
                }

                $sql_email = "SELECT * FROM usuario WHERE email = :email";
                $stmt_email = $this->conn->prepare($sql_email);
                $stmt_email->bindParam(":email", $email);
                $stmt_email->execute();
                $result_email = $stmt_email->fetch(PDO::FETCH_ASSOC);
    
                if ($result_email) {
                    return "Email já cadastrado...";
                }
    
                $sql = "INSERT INTO usuario (nome, email, senha, telefone) VALUES (:nome, :senha, :email, :telefone)";
                $db = $this->conn->prepare($sql);
    
                $db->bindParam(":nome", $nome);
                $db->bindParam(":senha", $senha);
                $db->bindParam(":email", $email);
                $db->bindParam(":telefone", $telefone);
    
                if ($db->execute()) {
                    return true;
                } else {
                    return "Erro ao cadastrar você...";
                }
    
            } catch (\Exception $th) {
                return $th->getMessage();
            }
        }
    
        public function deleteUser($id) {
            try {
                $sql = "DELETE FROM usuario WHERE id = :id";
                $db = $this->conn->prepare($sql);
                $db->bindParam(":id", $id);
                return $db->execute();
            }
            
            catch (\Exception $th) {
                return $th->getMessage();
            }
        }
    
        public function updateUser($id, $nome, $email) {
            try {
                $sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
                $db = $this->conn->prepare($sql);
                $db->bindParam(":nome", $nome);
                $db->bindParam(":email", $email);
                $db->bindParam(":id", $id);
                return $db->execute();
            }
            
            catch (\Exception $th) {
                return $th->getMessage();
            }
        }
    }

?>
