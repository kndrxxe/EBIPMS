<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['user']);
unset($_SESSION['user_type']);
session_unset();
session_destroy();
header("Location:index.php");
die();
?>