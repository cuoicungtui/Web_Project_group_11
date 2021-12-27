<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("location:login.php");
}
?>
<?php
$ID = $_SESSION['USER'];
$sdt = $_POST['sdt'];
$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
$file_path = 'assets/img/' . basename($_FILES["avatar"]["name"]);
require 'admin/connect.php';
$query = "";
if ($_FILES["avatar"]["size"] > 0) {
    $query = "UPDATE user_login Set sdt = '$sdt', avatar = '$file_path' WHERE id = $ID";
} else {
    $query = "UPDATE user_login Set sdt = '$sdt' WHERE id = $ID";
}

mysqli_query($conn, $query);
header("location:user_information.php");
?>