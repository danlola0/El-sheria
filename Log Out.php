<? php

session_start();
session_destroy();
unset($_SESSION['nom']);
header("location:SignUp.php");
?>


