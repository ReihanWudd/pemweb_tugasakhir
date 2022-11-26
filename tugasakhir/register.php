<?php

require_once("controller.php");
$qry = new Query();

if (isset($_POST["insert"])) {
    $qry->adduserdata();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
            margin: auto;
            width: 30%;
        }
        .container {
            margin-top: 20px;
            background-color: #ebebeb;
            padding: 20px;
            border-radius: 20px;
        }

        .login_input {
            display: flex;
            flex-direction: column;
        }
        form {
            margin: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>RES App</h1>
        <form action="" method="POST">
            <?php
                if(isset($qry)){
                    
                }
            ?>
            <p>Username</p>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1"  required>
            </div>
            <p class="username_empty"><?= $username_error?></p>

            <p>Email</p>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" required>
            </div>
            <p class="email_empty"></p>

            <p>Phone Number</p>
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" name="phone" aria-describedby="basic-addon1" required>
            </div>
            <p class="phone_empty"></p>

            <p>Password</p>
            <div class="input-group mb-3">

                <input type="password" class="form-control" placeholder="Password" aria-label="Password" id="password" name="password" aria-describedby="basic-addon1"  required>
            </div>
            <div style="font-size: 12px;display:flex">
            <input type="checkbox" onclick="toggleviewpass()"><p>Show password</p>
            </div>
            <p class="pass_empty"><?= $password_eror?></p>

            <p>Password verification</p>
            <div class="input-group mb-3">

                <input type="password" class="form-control" placeholder="verification" aria-label="Passwordverif" id="validation" name="passwordverif" aria-describedby="basic-addon1" required>
            </div>
            <div style="font-size: 12px;display:flex">
                <input type="checkbox" onclick="toggleviewvalid ()"><p>Show password</p>
            </div>
            
            <p class="passvar_empty"></p>

            <button class="btn btn-primary" type="submit" name="insert">register</button>
            <!-- <p class="regsuccess"><?= $result_vld?></p> -->
            <a href="index.php">Have a account?</a>
        </form>

    </div>
    <script src="script.js"></script>
</body>

</html>