<?php
    require_once("models/operations.php");
    class Operation extends DataBase{

        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $strPassword;
        private $conexion;

        public function __construct()
        {
            $this->conexion= new DataBase();



        }

        public function insertUsers(string $nombre, int $telefono, string $email, string $password ){
            $this->strNombre= $nombre;
            $this->intTelefono= $telefono;
            $this->strEmail= $email;
            $this->strPassword= $password;

            $sql= "INSERT INTO users (name, number, email, password) values(?,?,?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array ($this->strNombre,$this->intTelefono, $this->srtEmail, $this->srtPassword);
            $resInsert=$insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

        public function getUsers(){

            $sql= "SELECT * FROM users";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function updateUser (){

        }

        public function deleteUser (){

        }




    }
?>