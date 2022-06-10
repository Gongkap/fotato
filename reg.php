<?php
session_start();
include("connection.php");
include("function.php");
$user_data =check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
    <div class="container">
        <div class="fname">
            <h1 class="title">Registration form</h1>
        </div>
        <form action="home.php" method="post">
            <div class="name">
                <label for="name">name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="phone">
                <label for="mobile">mobile</label>
                <input type="tel" name="mobile" id="mobile" placeholder="Format : 1234-123-456" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
            </div> <span class="span"><h3>or</h3></span>
            <div class="email">
                <label for="email">email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="password">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="confirm password">
                <label for="confirm_password"> confirm password</label>
                <input type="password" name="password" id="confirm_password">
            </div>
            <div class="register">
                <input class="btn" role="button" type="submit" name="submit" id="" value="Register">

            </div>
            <div class="signup">
                <a href="login.php"> already have account? login</a>
            </div>
        </form>
    </div>


</body>

</html>