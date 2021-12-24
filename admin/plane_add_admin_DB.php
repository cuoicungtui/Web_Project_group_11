<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
    }
?>


<?php
    require "connect.php";
    $code_plane = $_POST['Code_Plane'];
    $name_plane = $_POST['Name_Plane'];
    $name_airline = $_POST['Name_Airline'];
    $l1_chair = $_POST['L1_Chair'];
    $l2_chair = $_POST['L2_Chair'];
    $query = "INSERT INTO list_planes (Code_Plane,Name_PLane,Name_Airline,L1_Chair,L2_Chair) VALUES ('$code_plane', '$name_plane', '$name_airline', $l1_chair,$l2_chair)";
    $result =  mysqli_query($conn,$query);
    if($result){
       header('location:plane_admin.php');
    }
    else
        header("location:plane_add_admin.php");
    
?>