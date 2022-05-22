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
                    <a href="../crews/blackbeard.php" class="active">Blackbeard Pirates</a>
                    <a href="../crews/whitebeard.php">Whitebeard Pirates</a>
                    <a href="../crews/big-mom.php">Big Mom Pirates</a>
                    <a href="../crews/beasts.php">Beasts Pirates</a>
                </article>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="body-container-crews">
            <article>
                <h1 class="body-title">Blackbeard Pirates</h1>
            </article>
            <article class="crew-info-container">
                <div class="crew-info">
                    <img src="../assets/img/blackbeard/blackbeard-flag.webp" alt="">
                    <div class="crew-body">The Blackbeard Pirates are an extremely powerful pirate fleet led by Emperor Marshall D. Teach, better known as "Blackbeard", and one of the main antagonist groups of the series.</div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/blackbeard/blackbeard-ship.jfif" alt="">
                    <div class="crew-body">After the time-skip, they have gained a signature ship called the Saber of Xebec.</div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/blackbeard/blackbeard-captain.jpg" alt="">
                </div>
                <div class="crew-info">
                    <img src="../assets/img/blackbeard/blackbeard-vicecaptain.gif" alt="">
                </div>
            </article>
        </div>
    </section>

</body>

</html>