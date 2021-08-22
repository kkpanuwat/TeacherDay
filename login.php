<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
<svg class="svg-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <image href="assets/imgs/logo-login.jpg" x="35%" height="340" width="340"/>
</svg>
    <div class="container">
    
        <div class="login">
            <div class="left"><img class="img_login" src="./assets/imgs/logo-login.jpg" alt=""></div> 
            <div class="right">
                <div class="formja">
                <form action="./function/loginController.php" method="post">
                    <div class="topic">Login</div>
                    <label for="">Username</label>
                    <br>
                    <input type="text" class="inputText" name="username" placeholder="username">
                    <br>
                    <label for="">Password</label>
                    <br>
                    <input type="password" class="inputText" name="password" placeholder="password">
                    <br>
                    <button class="btn-submit" type="submit">Login</button>
            </div>
        </div>
            </form>
        </div>
    </div>
</body>

</html>