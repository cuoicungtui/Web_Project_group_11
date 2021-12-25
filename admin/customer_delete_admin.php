<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    $id = $_GET['Id'];
    require "connect.php";
    $query = "DELETE FROM list_customer WHERE Id = '$id' "; 
    mysqli_query($conn,$query);
    header("location:customer_admin.php");
?>