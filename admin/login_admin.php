<?php
    session_start();
    
    require "connect.php";
    $us = $_POST['usename'];
    $pw = $_POST['password'];    
    $query = "SELECT * FROM admin Where UseName = '$us'";
    $result = mysqli_query($conn,$query);
    if( mysqli_num_rows($result)>0) {
        $data = mysqli_fetch_assoc($result);
        if(password_verify($pw,$data['PASSWORD'])){
            $_SESSION['USERNAME_admin'] = $us;
            header("location:Home.php");  
        }else{
            $error = "1";
            header("location:index.php?err=$error");
        }

    }else{
        $error = "2";
        header("location:index.php?err=$error");
    }
?>