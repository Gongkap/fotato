<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
        <div class="fname">
            <h1 class="title">login form</h1>
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
        
            <div class="login">
                <input class="btn" role="button" type="submit" name="login" id="login" value="login">

            </div>
            <div class="signup">
                <a href="reg.php"> Not Registered yet ? signup</a>
            </div>
        </form>
    </div>

</body>
</html>