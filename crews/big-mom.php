<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSIONS</title>
    <link rel="stylesheet" href="../assets/css/panel.css">
</head>

<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header('Location: ../index.php ');
    define("ERRORMSG", '<script language="javascript"> alert("This is a private section, please login");</script>');
    setcookie("NotLoggedCookie", ERRORMSG, time() + 1, "/");
    exit();
};
$userName = $_SESSION['userName'];
?>

<body>
    <header id="header" class="header">
        <div class="userlogin">
            <div class="header-container">
                <article class="user-logout">
                    <button class="user-name">
                        <img src="../assets/img/straw-hat.png" alt="">
                        <?php
                        echo $userName;
                        ?>
                    </button>
                    <div class="logout">
                        <form method="post" id="form" action="../session/destroy-session.php">
                            <input class="btn" type="submit" value="Logout">
                        </form>
                    </div>
                </article>
                <article>
                    <a href="../login/panel.php">Home</a>
                    <a href="../crews/straw-hat.php">Straw Hat Pirates</a>
                    <a href="../crews/roger.php">Roger Pirates</a>
                    <a href="../crews/red-hair.php">Red Hair Pirates</a>
                    <a href="../crews/blackbeard.php">Blackbeard Pirates</a>
                    <a href="../crews/whitebeard.php">Whitebeard Pirates</a>
                    <a href="../crews/big-mom.php" class="active">Big Mom Pirates</a>
                    <a href="../crews/beasts.php">Beasts Pirates</a>
                </article>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="body-container-crews">
            <article>
                <h1 class="body-title">Big Mom Pirates</h1>
            </article>
            <article class="crew-info-container">
                <div class="crew-info">
                    <img src="../assets/img/big-mom/big-mom-flag.webp" alt="">
                    <div class="crew-body">The Big Mom Pirates are an extremely infamous and powerful pirate crew led by the Emperor "Big Mom", and they are in control of the powerful nation of Totto Land,</div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/big-mom/big-mom-ship.webp" alt="">
                    <div class="crew-body">Queen Mama Chanter is an enormous ship, over twenty times the size of the Thousand Sunny</div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/big-mom/big-mom-captain.jpg" alt="">
                </div>
                <div class="crew-info">
                    <img src="../assets/img/big-mom/big-mom-vicecaptain.jpg" alt="">
                </div>
            </article>
        </div>
    </section>

</body>

</html>