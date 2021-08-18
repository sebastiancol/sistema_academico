<?php

    class DataBase {

        private $server = 'localhost';
        private $username = 'sebastian';
        private $password = 'sebastian';
        private $database = 'crud_php';
        private $conected;



        public function __construct() {
            $connectionString = "mysql:host=".$this->server.";dbname=".$this->database;

            try {
                $this->conected = new PDO($connectionString, $this->username,$this->password);
                $this->conected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "exitos";
            } catch (Exception $e) {
                $this->conected='Error de conexion';
                echo "Error: ".$e->getMessage();
            }

        }





    }
    //$prueba = new DataBase();

?>


