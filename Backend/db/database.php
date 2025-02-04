<?php

    class Database {
        private $server = "localhost"; 
        private $dbnome = "reservas";   
        private $user = "root";        
        private $pass = "";

        
        public function connect() {
            try {
                
                $conn = new PDO (
                    "mysql:host=" . $this->server . ";dbname=" . $this->dbnome, 
                    $this->user, 
                    $this->pass  
                );
                
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;

            } catch (\Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
    }

?>