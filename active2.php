<?php 
  $id_user=$_GET['id_user'];
  $code_flight=$_GET['code_flight'];
  $token=$_GET['token'];
  require_once "admin/connect.php";
  $query = "UPDATE list_customer set status = 1  where id_user=$id_user and Code_Flight='$code_flight' and active_code='$token'";
  $result = mysqli_query($conn,$query);
  if($result){
    header('location: index.php?ok');
    }
    else {
    header('location: index.php?ko');
    }
?>