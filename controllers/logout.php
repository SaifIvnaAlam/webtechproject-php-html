<?php


session_start();


if (isset($_SESSION['email'])&&isset($_COOKIE['email'])) {

setcookie("email", "", time() - 3600);


session_unset();
session_destroy();


header("location: ../view/login.php");


}


else{


header("location:../view/login.php");


}


?>