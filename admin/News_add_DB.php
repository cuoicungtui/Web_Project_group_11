<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    if(!isset($_POST['submit'])){
        header("location:Home.php");
    }
?>

<?php
    $Title = $_POST['Title'];
    $prg = $_POST['paragraph'];
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
    move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file);
    $file_path = './assets/img/'.basename($_FILES["file_img"]["name"]);
    require "connect.php";
    $query = "INSERT INTO dl(img,Title,prg) VALUES('$file_path','$Title','$prg')";
    mysqli_query($conn,$query);
    header("location:News.php");
?>