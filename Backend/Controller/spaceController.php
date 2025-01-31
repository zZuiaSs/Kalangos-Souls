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
                $sql = "";
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    
    }

?>

<!-- Inserir espaços no banco de dados -->