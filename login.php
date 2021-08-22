<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/icon.PNG">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
<img class="img-mb" src="assets/imgs/icon.png" alt="">
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