<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    $id = $_GET['Code_PLane'];
    require "connect.php";
    $query = "DELETE FROM list_planes WHERE Code_Plane = '$id' "; 
    mysqli_query($conn,$query);
    header("location:Plane_admin.php");
?>