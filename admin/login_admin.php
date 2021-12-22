<?php
    session_start();
    
    require "connect.php";
    $us = $_POST['usename'];
    $pw = $_POST['password'];    

    $query = "SELECT * FROM admin Where UseName = ?";
    $stmt = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,"s",$us);

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_bind_result($stmt,$id,$username,$password);
        if(mysqli_stmt_fetch($stmt)){
            if(password_verify($pw,$password)){
                $_SESSION['USERNAME_admin'] = $username;
                header("location:Home.php"); 
            }
            else{
                $error = "1";
                header("location:index.php?err=$error");
            }       
        }else{
                $error = "2";
                header("location:index.php?err=$error");
            }
    }

     
?>