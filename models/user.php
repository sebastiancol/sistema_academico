



<?php
    class User implements Crud {

        private $id;
        private $first_name;
        private $last_name;
        private $address;
        private $number;
        private $birthday;
        private $gender;

        function __construct($id,$first_name,$last_name,$address,$number,$birthday,$gender)
        {
            $this->id=$id;
            $this->first_name=$first_name;
            $this->last_name=$last_name;
            $this->address=$address;
            $this->number=$number;
            $this->birthday=$birthday;
            $this->gender=$gender;
        }

        function get_parameter(){
            return $this->id.
                $this->first_name.
                $this->last_name.
                $this->address.
                $this->number;
                //$this->birthday.
                //$this->gender;
        }



        public function create()
        {


             $user= new User($_POST['id'],$_POST['first_name'],$_POST['last_name'],$_POST['address'],$_POST['number']);
             //$user->set_parameter()
             //$id,$first_name,$last_name,$address,$birthday,$gender

            if( isset($_POST['id']) and isset ($_POST['first_name'])
                and isset ($_POST['last_name']) and isset ($_POST['address'])
                and isset ($_POST['number'])   ){

                //echo $_POST['user'];
                //echo $_POST['password'];
                echo $user->get_parameter();
            }else {
                echo "no encuentra la pagina";
            }

        }

        public function edit()
        {
            // TODO: Implement edit() method.
        }

        public function update()
        {
            // TODO: Implement update() method.
        }

        public function delete()
        {
            // TODO: Implement delete() method.
        }


    }
?>

<?php

    interface Crud {

        public function create();
        public function edit();
        public function update();
        public function delete();
    }
    /*
    interface Student{
        public function matters();
        public function jornada();
    }

    interface Professor{
        public function horario();
        public function jornada();
    }

    interface Worker{
        public function matters();
        public function jornada();
    }

    interface Administrator{

    }*/
?>

