<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    if(!isset($_POST['submit'])){
        header("location:Home.php");
        return;
    }
?>



<?php
    require "connect.php";
    $h5 = $_POST['Title'];
    $p = $_POST['paragraph'];
    $index = $_POST['index'];
    $ID = $_POST['ID'];
    $name_img = $_POST['name_image'];
    $query ="Select * FROM conten Where ID = $ID and index_ = $index";
    $result  = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        header("location:News_add_conten.php?add_conten=$ID");
        return;
    }
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
    move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file);
    if(basename($_FILES["file_img"]["name"])!="")
        $file_path = './assets/img/'.basename($_FILES["file_img"]["name"]);
    else 
        $file_path = "";
    
    $query = "INSERT INTO conten(ID,img,h5,p,index_,img_name) VALUES($ID,'$file_path','$h5','$p',$index,'$name_img')";
    mysqli_query($conn,$query);
    header("location:News_conten.php?id=$ID");
?>