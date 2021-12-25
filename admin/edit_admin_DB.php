<?php

if(!isset($_POST['submit'])){
    header('location:index.php');
}

?>
submit
<?php
    include "connect.php";
    $ID = $_GET['id'];
    $cusent_pw = $_POST['curent_password'];
    $new_pw = $_POST['password_new'];  
    $password_hash = password_hash($new_pw,PASSWORD_BCRYPT);
    $query = "SELECT * From admin WHERE Id = $ID";
    $result = mysqli_query($conn,$query);
    $data= mysqli_fetch_assoc($result);
    
    if(password_verify($cusent_pw,$data['PASSWORD'])){
        $query2 = "UPDATE admin SET PASSWORD = '$password_hash' Where id = $ID ";
        mysqli_query($conn,$query2);
        header("location:Account_admin.php");
    }else{
        header("location:edit_admin.php?id=$ID");
    }
?>