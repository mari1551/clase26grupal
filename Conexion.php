<?php

    //Copie la conexion que hizo Mariana en el ultimo tp
    class Conexion {    

        private $host = 'localhost';
        private $dbname = 'db';
        private $user = 'root';
        private $pass = 'bigdata2023';
        private $conn;
    
        public function conectar() {
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Error de conexión: ' . $e->getMessage();
            }
            return $this->conn;
        } 
    }



?>