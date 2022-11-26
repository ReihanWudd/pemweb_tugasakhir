<?php

class userlg{
    private $dtbs;
    public function __construct()
    {
        // $this-> dtbs = mysqli_connect("localhost","root","","game_data");
        $this -> dtbs = new mysqli("localhost","root","","game_data");
    
    }
    public function insertdatauser($name,$email,$phone,$password){
        $query = "INSERT INTO  register_data (username,email,phone,password) VALUES ('$name','$email','$phone','$password')";
        return $this -> dtbs -> query($query);
    }

    public function cekemailuser($email){
        $query = "SELECT * FROM register_data WHERE email = '$email'"; 
        $result = $this ->dtbs -> query($query);
        return $result -> fetch_assoc();
    }

    // public function insertdatauser(){
        // $name = $_POST['username'];
        // $email= $_POST['email'];
        // $phone = $_POST['phone'];
        // $password = $_POST['password'];
        // $query = "INSERT INTO  register_data (username,email,phone,password) VALUES ('$name','$email','$phone','$password')";
        // $this -> dtbs -> query($query);
    // }

    // public function cekdatauser(){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $query = "SELECT * from register_data WHERE email = $email ";
    //     $hasil = $this -> dtbs -> query($query);
    //     return $hasil -> fetch_assoc();

    // }
}


?>