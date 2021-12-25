<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
    }
?>


<?php
    require "connect.php";
    $ID = $_POST['Code_Plane'];
    $name_plane = $_POST['Name_Plane'];
    $name_airline = $_POST['Name_Airline'];
    $l1_chair = $_POST['L1_Chair'];
    $l2_chair = $_POST['L2_Chair'];
    $query = "UPDATE list_planes SET Name_Plane='$name_plane', Name_Airline='$name_airline', L1_Chair=$l1_chair, L2_Chair=$l2_chair WHERE Code_Plane='$ID'";
    $result =  mysqli_query($conn,$query);
    
    if($result){
        header('location:plane_admin.php');
     }
     else
         header("location:plane_add_admin.php");
 ?>   
