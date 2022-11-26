<?php

require_once("controller.php");
class erroralert{
    private $conn;
    public function __construct()
    {
        $this -> conn = mysqli_connect("localhost","root","","game_data");
    }

    public function trytoregister(){
        $name = $_POST['username'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        // $regis = $this -> conn -> adduserrdata();
        if ($email == "" || $password == "" || $name == "" || $phone == "") {
            return "input cannot be empty";
          }
        else{
            
        }
    }
}


?>