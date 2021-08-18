<?//php require('includes/header.php'); ?>

<?//php require_once('models/Db.php');?>



<?php



    class Unregistred_User extends User{

        public $unregistred;

        public function __construct()
        {
            $unregistred = new User();
            $unregistred->create();


            //parametros del contructor ($id, $first_name, $last_name, $address, $number, $birthday, $gender)
            //parent::__construct($id, $first_name, $last_name, $address, $number, $birthday, $gender);
        }






    }


?>




