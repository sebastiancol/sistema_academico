<?php
    //require_once('Autoload.php');
    //require_once('./models/Db.php');

    class Operation extends DataBase{

        private $doc;
        private $strNombre;
        private $strApellido;
        private $intTelefono;
        private $direccion;
        private $strEmail;
        private $strPassword;
        private $conexion;

        public function __construct()
        {
            $this->conexion= new DataBase();



        }
        public function insertUsers(int $document, string $f_nombre, string $l_nombre, string $address, int $telefono, string $email, string $password ){
        //public function insertUsers(){
            $this->doc= $document;
            $this->strNombre= $f_nombre;
            $this->strApellido= $l_nombre;
            $this->direccion= $address;
            $this->intTelefono= $telefono;
            $this->strEmail= $email;
            $this->strPassword= $password;

            $sql= "INSERT INTO users (document, f_name, l_name, address, phone, email, password) values(?,?,?,?,?,?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array ($this->doc, $this->strNombre,$this->strApellido,$this->direccion,$this->intTelefono, $this->srtEmail, $this->srtPassword);
            $insert->execute($arrData);
            //$resInsert->execute($insert);
            //$resInsert=$insert->execute($arrData);
            //$idInsert = $this->conexion->lastInsertId();
            //return $idInsert;
            return $insert;

        }

        public function getUsers(){
            $sql= "SELECT * FROM users";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function updateUser (int $id ,string $nombre, int $telefono, string $email, string $password){
            $this->strNombre= $nombre;
            $this->intTelefono= $telefono;
            $this->strEmail= $email;
            $this->strPassword= $password;
            $sql = "UPDATE user set nombre=?, telefono=?, email=? where id=$id";
            $update = $this->conexion->prepare($sql);
            $arrData = array($this->strNombre,$this->intTelefono, $this->srtEmail, $this->srtPassword);
            $resExecute = $update->execute($arrData);
            return $resExecute;

        }

        public function getUsert(int $id){
            $sql= "SELECT * FROM users where id=? ";
            $arrWhere = array($id);
            $query = $this->conexion->prepare($sql);
            $query->execute($arrWhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }

        public function deleteUser (int $id){
            $sql = "DELETE FROM USERS WHERE id=?";
            $arrWhere = array($id);
            $delete = $this->conexion->prepare($sql);
            $del= $delete->execute($arrWhere);
            return $del;
        }




    }


?>