<?php
$name = null;
$password = null;
$username_error = null;

class Query
{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "game_data");
    }

    public function getemail()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM register_data where username = '$email' ";
        $hasil  = $this->conn->query($query);
        return $hasil;
    }

    public function checkuserdata()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM register_data where email = '$email' and password = '$password' ";
        $hasil = $this->conn->query($query);
        if ($hasil->num_rows > 0) {
            $row = mysqli_fetch_assoc($hasil);
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
        } else {
            echo "error";
        }
    }

    public function adduserdata()
    {
        global $result_vld;
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $validation = $_POST["passwordverif"];
        $result_vld = null;
        $getemail = "SELECT * FROM register_data where email = '$email' ";
        $get_result =  $this->conn->query($getemail);
        if ($get_result->num_rows > 0) {
            echo "email account already create";
        } else {
            if ($password != $validation) {
                $result_vld = "password is different";
            } else {
                $query = "INSERT INTO  register_data (username,email,phone,password) VALUES ('$name','$email','$phone','$password')";
                $this->conn->query($query);
            }
        }
    }

    public function additems()
    {
        $name = $_POST["name"];
        $category = $_POST["category"];
        $device = $_POST["device"];


        $querynya = "INSERT INTO datagame (game_name ,game_category,game_deivce ) VALUES ('$name','$category','$device')";

        $this->conn->query($querynya);
    }

    public function delitems()
    {
        $iduser = $_POST["idx"];


        $querynya = "DELETE FROM datagame where id_game = '$iduser'";

        $this->conn->query($querynya);

        header("Location: index.php");
    }

    public function updateitem()
    {

        $name = $_POST["name"];
        $category = $_POST["category"];
        $device = $_POST["device"];

        $querynya = "UPDATE  datagame SET game_name = '$name',game_category = '$category',game_deivce = '$device'";
        $this->conn->query($querynya);
    }
}
