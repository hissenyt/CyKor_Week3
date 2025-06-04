<?php
session_start();
unset($_SESSION['username']);
$_SESSION['is_login'] = false;

header("Location: login.php");
exit;
?>