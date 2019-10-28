<?php
session_start();
unset($_SESSION['admin']);
header('location:5_login_page.php');
?>