<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Straw Hat Pirates</title>
    <link rel="stylesheet" href="../assets/css/panel.css">
    <link href="../assets/img/favicon.ico" rel="icon" type="image/x-icon">
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
                    <a href="../crews/straw-hat.php" class="active">Straw Hat Pirates</a>
                    <a href="../crews/roger.php">Roger Pirates</a>
                    <a href="../crews/red-hair.php">Red Hair Pirates</a>
                    <a href="../crews/blackbeard.php">Blackbeard Pirates</a>
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
                <h1 class="body-title">Straw Hat Pirates</h1>
            </article>
            <article class="crew-info-container">
                <div class="crew-info">
                    <img src="../assets/img/straw-hat/mugiwara-flag.webp" alt="">
                    <div class="crew-body">
                        The Straw Hat Pirates, are an infamous and incredibly powerful rising pirate crew that originated from the East Blue, but have various members from different areas.
                    </div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/straw-hat/mugiwara-ship.webp" alt="">
                    <div class="crew-body">
                    The Thousand Sunny is the second ship of the Straw Hat Pirates, built after the Going Merry was destroyed.
                    </div>
                </div>
                <div class="crew-info">
                    <img src="../assets/img/straw-hat/mugiwara-captain.jpg" alt="">
                </div>
                <div class="crew-info">
                    <img src="../assets/img/straw-hat/mugiwara-vicecaptain.webp" alt="">
                </div>
            </article>
        </div>
    </section>

</body>

</html>