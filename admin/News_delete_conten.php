<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    $id = $_GET['id'];
    $index = $_GET['index'];
    require "connect.php";
    $query = "DELETE FROM conten WHERE ID = $id and index_=$index"; 
    mysqli_query($conn,$query);
    header("location:News_conten.php?id=$id");
?>