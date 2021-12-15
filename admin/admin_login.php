<?php
    include "connect.php";
    $us = $_POST['usename'];
    $pw = $_POST['password'];    
    $query = "SELECT * FROM admin Where UseName = '$us' and PASSWORD = '$pw'";
    $data = mysqli_query($conn,$query);
    if( mysqli_num_rows($data)>0) {
        header("location: /Web_Project_11/Web_Project_group_11/admin/index.php");       
    }else{
        header("location: /Web_Project_11/Web_Project_group_11/admin/login.php");
    }
?>