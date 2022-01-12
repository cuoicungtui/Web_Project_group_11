<?php
    session_start();
    if(!isset($_SESSION['USER'])){
        header('location: index.php');
    }else {
        $code_flight = $_GET['code_flight'];
        $id_user = $_SESSION['USER'];
        $token = md5($id_user . rand(10, 9999));
        $adult = $_GET['adult'];
        $children = $_GET['children'];
        $baby = $_GET['baby'];
        if($_GET['chair']==1){
            $chair = 'L1';
        }else {
            $chair = 'L2';
        }
        for($i=1;$i<=(int)$adult;$i++){
            $name = $_POST['adult_name'.$i];
            $gt = $_POST['adult_gt'.$i];
            require_once "admin/connect.php";
            $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user) VALUES ('$name','$code_flight','$chair','$gt','$id_user')";
            $result = mysqli_query($conn, $query);
        }
        
        for($i=1;$i<=(int)$children;$i++){
            $name = $_POST['children_name'.$i];
            $gt = $_POST['children_gt'.$i];
            require_once "admin/connect.php";
            $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user) VALUES ('$name','$code_flight','$chair','$gt','$id_user')";
            $result = mysqli_query($conn, $query);
        }
        for($i=1;$i<=(int)$baby;$i++){
            $name = $_POST['baby_name'.$i];
            $gt = $_POST['baby_gt'.$i];
            require_once "admin/connect.php";
            $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user) VALUES ('$name','$code_flight','$chair','$gt','$id_user')";
            $result = mysqli_query($conn, $query);
        }
        
    }
    // echo $_GET['adult'];
?>