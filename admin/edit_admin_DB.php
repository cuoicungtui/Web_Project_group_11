<?php
    session_start();
    if (!isset($_SESSION['USERNAME_admin'])) {
        header("location:index.php");
    }
?>

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
        $query = "UPDATE admin SET PASSWORD = '$password_hash' WHERE Id = $ID ";
        mysqli_query($conn,$query);
        header("loaction:Account_admin.php");
    }else{
        $err="1";
        header("location:edit_admin.php?err=$err");
    }

?>