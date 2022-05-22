<?php
session_start();

unset($_SESSION['userName']);
session_destroy();
header('Location: ../index.php ');
