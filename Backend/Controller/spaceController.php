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
                $sql = "SELECT * FROM espacos";
                $db = $this->conn->prepare($sql);
                $db->execute();
                return $db->fetchAll(PDO::FETCH_ASSOC);
                
            } catch(\Exception $th) {
                return $th->getMessage();
            }
        }

        public function createSpaces($nome, $tipo, $capacidade, $descricao) {
            try {
                $sql = "INSERT INTO espacos (nome, tipo, capacidade, descricao)
                        VALUES ()";
                $db = $this->conn->prepare($sql);
                $db->bindParam(":nome", $nome);
                $db;

            } catch(\Exception $th) {
                return $th->getMessage();
            }
        }
    }

?>