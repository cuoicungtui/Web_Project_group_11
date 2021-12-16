<?php
    session_start();
    if(isset($_SESSION['USERNAME_admin'])){
        unset($_SESSION['USERNAME_admin']);
        header("location:index.php");
    }
?>