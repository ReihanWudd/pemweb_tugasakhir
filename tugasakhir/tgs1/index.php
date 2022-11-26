<?php

// include "../linkconfig.php";
// require_once("../models/config_login.php");

// $qry = new userlg();

// if (isset($_POST["submit"])) {
//     $qry->insertdatauser();
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .container {
            margin: auto;
            width: 40%;
            background-color: #ebebeb;
            padding: 20px;
            border-radius: 20px;
        }

        .login_input {
            display: flex;
            flex-direction: column;
        }

        /* input[type=text] {
            height: 30px;
            border-radius: 5px;
        } */

    </style>
</head>
<body>
    
<div class="container">
        <h1>RES App</h1>
        <form action="" method="POST">

            <p>Email</p>
            <!-- <input type="text" name="email" id="category"> -->
            <div class="input-group mb-3">
                <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1">
            </div>

            <p>Password</p>
            <!-- <input type="text" name="password" id="device"> -->
            <div class="input-group mb-3">
                <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1">
            </div>
            <div>
            <button class="btn btn-primary" type="submit" name="submit">submit</button>
            <a href="views/register.php">Register</a>
            </div>
            
        </form>
    </div>
</body>
</html>