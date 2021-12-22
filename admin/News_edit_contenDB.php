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
    $index=$_POST['index'];
    $h5 = $_POST['Title'];
    $p = $_POST['paragraph'];
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
    move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file);
    $file_path = './assets/img/'.basename($_FILES["file_img"]["name"]);
    $query = "";
    if($_FILES["file_img"]["name"]>0){
        $query = "UPDATE conten Set h5 = '$Title', p = '$prg', img = '$file_path',index =  WHERE ID = $id";
    }else{
        $query = "UPDATE conten Set h5 = '$Title', p = '$prg', date = '$date' WHERE ID = $id";
    }  
    $conn->query($query);
    header("location:News.php");
?>


<?php
    include "footer.php";
?>