<?php
    session_start();
    
    require "connect.php";
    $us = $_POST['usename'];
    $pw = $_POST['password'];    
    $query = "SELECT * FROM admin Where UseName = '$us' and PASSWORD = '$pw'";
    $data = mysqli_query($conn,$query);
    if( mysqli_num_rows($data)>0) {
        $_SESSION['USERNAME_admin'] = $us;
        header("location: /Web_Project_11/Web_Project_group_11/admin/Home.php");       
    }else{
        header("location: /Web_Project_11/Web_Project_group_11/admin/index.php?error = $error");
    }
?>