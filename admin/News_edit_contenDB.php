<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
    }
?>

<?php
   // include "header_admin.php";
?>

<?php
    require "connect.php";
    $id = $_GET['id'];
    $index_new=$_POST['index'];
    $index_old=$_GET['index'];
    $h5 = $_POST['Title'];
    $p = $_POST['paragraph'];
    $img_name = $_POST['name_image'];
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
    move_uploaded_file($_FILES["file_img"]["tmp_name"], $target_file);
    $file_path = './assets/img/'.basename($_FILES["file_img"]["name"]);
    $query = "SELECT * FROM conten Where ID = $id AND index_ = $index_new";
    $result =  mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        header("location:News_edit_conten.php?id=$id&index=$index_old");
        return;
    }


    $query = "SELECT * FROM conten Where ID = $id AND index_ = $index_old";
    $result =  mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    $ID_tb=$data['ID_tb'];
    $query = "";
    if($_FILES["file_img"]["name"]>0){
        $query = "UPDATE conten Set h5 = '$h5', p = '$p', img = '$file_path',index_ = $index_new ,img_name = '$img_name' WHERE ID_tb = $ID_tb";
    }else{
        $query = "UPDATE conten Set h5 = '$h5', p = '$p', index_ = $index_new  WHERE ID_tb = $ID_tb";
    }  
    $conn->query($query);
    echo $query;
    
    header("location:News_conten.php?id=$id");
?>


<?php
    include "footer.php";
?>