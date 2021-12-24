<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    $Code_Flight = $_GET['Code_Flight'];
    require "connect.php";
    $query = "DELETE FROM  list_flight WHERE Code_Flight='$Code_Flight'"; 
    mysqli_query($conn,$query);
    header("location:flight_delete.php");
?>