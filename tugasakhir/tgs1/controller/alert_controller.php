<?php 
// include "../linkconfig.php";
// require_once PATH_MODELS . "config_login.php";
require_once ("../models/config_login.php");

class alertcontrol {
    private $modeluser;
    public function __construct()
    {
        $this -> modeluser = new userlg();

        if (session_status() === PHP_SESSION_NONE){
            session_start();
        }

    }
    public function register($name,$email,$phone,$password,$passverif)
    {
      // validate null input
      if ($email == "" || $password == "" || $name == "" || $phone == "") {
        return "input cannot be empty";
      }
  
      // verify password
      if ($password != $passverif) {
        return "password verification is not the same";
      }
  
      // length password >= 8
      if (strlen($password) < 8) {
        return "password must contains atleast 8 character";
      }
  
      // cek whether email is exists in database
      // if user is exists return error message
      $user = $this->modeluser->cekemailuser($email);
      if (isset($user)) {
        return "email is already taken";
      }
  
      // insert user record from form credential
      if (!$this->modeluser->insertdatauser($name,$email,$phone,$password)) {
        return "internal server error";
      }
  
      // send session to login page
      $_SESSION["message-success"] = "registration success";
      header("Location:login.php");
    }  
    
}

?>