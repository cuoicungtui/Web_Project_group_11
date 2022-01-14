<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header('location: index.php');
} else {
    $code_flight1 = $_GET['code_flight1'];
    $code_flight2 = $_GET['code_flight2'];
    $id_user = $_SESSION['USER'];
    $token =  md5($id_user).rand(100,10000);
    $adult = $_GET['adult'];
    $children = $_GET['children'];
    $baby = $_GET['baby'];
    if ($_GET['chair1'] == 1) {
        $chair1 = 'L1';
    } 
    else {
        $chair1 = 'L2';
    }
    if ($_GET['chair2'] == 1) {
        $chair2 = 'L1';
    } 
    else {
        $chair2 = 'L2';
    }
    for ($i = 1; $i <= (int)$adult; $i++) {
        $name = $_POST['adult_name' . $i];
        $gt = $_POST['adult_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight1','$chair1',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
        
    }

    for ($i = 1; $i <= (int)$children; $i++) {
        $name = $_POST['children_name' . $i];
        $gt = $_POST['children_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight1','$chair1',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
    }
    for ($i = 1; $i <= (int)$baby; $i++) {
        $name = $_POST['baby_name' . $i];
        $gt = $_POST['baby_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight1','$chair1',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
    }
    for ($i = 1; $i <= (int)$adult; $i++) {
        $name = $_POST['adult_name' . $i];
        $gt = $_POST['adult_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight2','$chair2',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
        
    }
    for ($i = 1; $i <= (int)$children; $i++) {
        $name = $_POST['children_name' . $i];
        $gt = $_POST['children_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight2','$chair2',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
    }
    for ($i = 1; $i <= (int)$baby; $i++) {
        $name = $_POST['baby_name' . $i];
        $gt = $_POST['baby_gt' . $i];
        require_once "admin/connect.php";
        $query = "INSERT INTO list_customer(Name,Code_Flight,Type_Chair,Sex,id_user,active_code) VALUES ('$name','$code_flight2','$chair2',$gt,$id_user,'$token')";
        $result = mysqli_query($conn, $query);
    }

    $query = "SELECT * FROM user_login WHERE id = $id_user";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $email = $data['email'];
    require_once "sendmail/sendmailer.php";
    $link = 'http://localhost:81/Web_Project_group_11/active2.php?id_user='.$id_user.'&code_flight1='. $code_flight1.'&code_flight2='. $code_flight2.'&token='. $token;
    if(sendmail($email,$link)){
    header('location: index.php?ok');
    }
    else {
    header('location: index.php?ko');
    }

    } 
?>
