<?php
    session_start();
    if (!isset($_SESSION['USERNAME_admin'])) {
        header("location:index.php");
    }
?>

<?php
    $ID = $_GET['id'];
    include "connect.php";
    $query = "DELETE FROM admin WHERE Id = $ID ";
    mysqli_query($conn,$query);
    header("location:Account_admin.php");
?>