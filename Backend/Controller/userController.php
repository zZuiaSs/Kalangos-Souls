<?php
include_once __DIR__ . "/../db/database.php";
 
class UserController
{
    private $conn;
 
    public function __construct()
    {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function getAllUsers()
    {
        try {
            $sql = "SELECT * FROM usuarios";
            $db = $this->conn->prepare($sql);
            $db->execute();
            return $db->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    public function createUser($nome, $email, $senha)
    {
        try {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);

 
            return $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
 
    public function deleteUser($id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id", $id);
            return $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
 
    public function updateUser($id, $nome, $email)
    {
        try {
            $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":nome", $nome);
            $db->bindParam(":email", $email);
            $db->bindParam(":id", $id);
            return $db->execute();
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    public function getUserById($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $db = $this->conn->prepare($sql);
            $db->bindParam(":id", $id);
            $db->execute();
            return $db->fetch(PDO::FETCH_ASSOC);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}



A