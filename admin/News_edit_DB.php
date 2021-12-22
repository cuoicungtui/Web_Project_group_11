<?php
    session_start();
    if (!isset($_SESSION['USERNAME_admin'])) {
        header("location:index.php");
}
?>

<?php
    include "header_admin.php";
?>

<?php
    require "connect.php";
    $id = $_GET['id'];
    $Title = $_POST['Title'];
    $prg = $_POST['paragraph'];
    $date =$_POST['date'];
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
    move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file);
    $file_path = './assets/img/'.basename($_FILES["file_img"]["name"]);
    $query = "";
    if($_FILES["file_img"]["name"]>0){
        $query = "UPDATE dl Set Title = '$Title', Prg = '$prg', img = '$file_path', date = '$date' WHERE ID = $id";
    }else{
        $query = "UPDATE dl Set Title = '$Title', Prg = '$prg', date = '$date' WHERE ID = $id";
    }  
    $conn->query($query);
    header("location:News.php");
?>


<?php
    include "footer.php";
?>