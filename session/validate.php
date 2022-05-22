<?php
session_start();

define("user", ["userName" => "luffy", "password" => "luffy"]);

if (isset($_SESSION['userName'])) {
    $url = '../login/panel.php';
    header('Location: ' . $url);
    exit();
} else if (isset($_POST['userName']) && isset($_POST['password'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if ($userName === user["userName"] && $password === user["password"]) {
        $_SESSION['password'] = $password;
        $_SESSION['userName'] = $userName;
        $url = '../login/panel.php';
        header('Location: ' . $url);
    } else {

        define("ERRORMSG", '<script language="javascript"> alert("Incorrect user name or password, please try again");</script>');
        setcookie("IncorrectLoginCookie", ERRORMSG, time() + 1, "/");
        header('Location: ' . '../index.php');
        exit();
    }

    exit();
};
