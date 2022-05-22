<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Piece Wiki</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="./assets/img/favicon.ico" rel="icon" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="title-container">
                <div class="title">
                    <h1>One Piece Wiki - Login</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="body-container">
                <div class="container-form">

                    <form method="post" id="form" action="./session/validate.php">

                        <h4>User Name</h4>
                        <input type="text" id="userName" name="userName" required>
                        <h4>Password</h4>
                        <input type="password" id="password" name="password" required>

                        <div>
                            <input class="btn" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <input id="playBtn" class="play-btn" type="button">
    
    <script src="./assets/js/main.js"></script>
</body>
<?php
session_start();
if (isset($_COOKIE["NotLoggedCookie"])) {
    echo $_COOKIE["NotLoggedCookie"];
    unset($_COOKIE['NotLoggedCookie']);
    setcookie('NotLoggedCookie', null, -1, '/');
} else if (isset($_COOKIE["IncorrectLoginCookie"])) {
    echo $_COOKIE["IncorrectLoginCookie"];
    unset($_COOKIE['IncorrectLoginCookie']);
    setcookie('IncorrectLoginCookie', null, -1, '/');
}
?>

</html>