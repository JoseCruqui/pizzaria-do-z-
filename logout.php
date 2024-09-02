<?php
session_start();
if($_SESSION["email_usuario"]){
    session_destroy();
    header("location:login.php");
}
?>