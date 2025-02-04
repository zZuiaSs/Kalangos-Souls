<?php

    include_once __DIR__ . "../../db/database.php";
    
    class spaceController {
        private $conn;

        public function __construct() {
            $objDb = new Database();
            $this->conn = $objDb->connect();
        }

        public function getAllSpaces() {
            try {
                $sql = "SELECT * FROM espaco";
                $db = $this->conn->prepare($sql);
                $db->execute();
                return $db->fetchAll(PDO::FETCH_ASSOC);
                
            } catch(\Exception $th) {
                return $th->getMessage();
            }
        }
        
        public function createSpaces($nome, $tipo, $capacidade, $descricao) {
            try {
                $sql = "INSERT INTO espaco (nome, tipo, capacidade, descricao)
                        VALUES (:nome, :tipo, :capacidade, :descricao)";
                $db = $this->conn->prepare($sql);
                $db->bindParam(":nome", $nome);
                $db->bindParam(":tipo", $tipo);
                $db->bindParam(":capacidade", $capacidade);
                $db->bindParam(":descricao", $descricao);
                return $db->execute();
                
            } catch (\Exception $th) {
                return $th->getMessage();
            }
        }

        public function deleteSpaces($id) {
            try {
                $sql = "DELETE FROM espaco WHERE id = :id";
                $db = $this->conn->prepare($sql);
                $db->bindParam(":id", $id);
                return $db->execute();

            } catch (\Exception $th) {
                return $th->getMessage();
            }
        }

        public function updateSpaces($id, $nome, $tipo, $capacidade, $descricao) {
            try {
                $sql = "UPDATE espaco SET nome = :nome, tipo = :tipo, capacidade = :capacidade, descricao = :descricao WHERE id = :id";
                $db = $this->conn->prepare($sql);
                
                $db->bindParam(":nome", $nome);
                $db->bindParam(":tipo", $tipo);
                $db->bindParam(":capacidade", $capacidade);
                $db->bindParam(":descricao", $descricao);
                $db->bindParam(":id", $id);
                return $db->execute();

            } catch (\Exception $th) {
                return $th->getMessage();
            }
        }
    }

?>