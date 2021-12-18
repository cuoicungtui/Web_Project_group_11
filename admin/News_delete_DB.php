<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    $id = $_GET['id'];
    require "connect.php";
    $query = "DELETE FROM dl WHERE ID = $id ";
    mysqli_query($conn,$query);
    header("location:News.php");
?>