<?php
    session_start();
    if(isset($_SESSION['USER'])){
        unset($_SESSION['USER']);
        header("location: index.php");
    }
?>