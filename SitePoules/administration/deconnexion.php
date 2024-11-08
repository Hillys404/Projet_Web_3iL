<?php 
session_start();
unset($_SESSION['userId']);
session_destroy();
setcookie('PHPSESSID', '', time() - 3600, '/');

header('Location: ../index.php');
exit;
