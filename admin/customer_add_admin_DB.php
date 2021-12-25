<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
    }
?>


<?php
    require "connect.php";
    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $sdt = $_POST['SDT'];
    $email = $_POST['EMAIL'];
    $code_flight = $_POST['Code_Flight'];
    $type_chair = $_POST['Type_Chair'];
    $query = "INSERT INTO list_customer (Id,Name,SDT,EMAIL,Code_Flight,Type_Chair) VALUES ('$id', '$name', '$sdt', '$email','$code_flight','$type_chair')";
    $result =  mysqli_query($conn,$query);
    if($result){
       header('location:customer_admin.php');
    }
    else
        header("location:customer_add_admin.php");
    
?>