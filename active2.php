<?php 
  $id_user=$_GET['id_user'];
  $code_flight1=$_GET['code_flight1'];
  $code_flight2=$_GET['code_flight2'];
  $token=$_GET['token'];
  require_once "admin/connect.php";
  $query = "UPDATE list_customer set status = 1  where id_user=$id_user and Code_Flight1='$code_flight1' and active_code='$token'";
  $result = mysqli_query($conn,$query);
  $query = "UPDATE list_customer set status = 1  where id_user=$id_user and Code_Flight2='$code_flight2' and active_code='$token'";
  $result = mysqli_query($conn,$query);
  if($result){
    header('location: index.php?ok');
    }
    else {
    header('location: index.php?ko');
    }
?>