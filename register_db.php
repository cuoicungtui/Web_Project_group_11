<?php
if (!isset($_POST['btn-register']))
    header('Location:register.php');
?>

<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
if($password != $password_confirm){
    header('Location:register.php?err1');
    return;
}
require "admin/connect.php";
$query = "SElECT * FROM user_login WHERE email = '$email'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    header('Location:register.php?err2');
} else {

    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query2 = "INSERT INTO user_login (firstname,lastname,email,password) Values ('$firstname','$lastname','$email','$passwordHash')";
    mysqli_query($conn, $query2);
    header('Location:login.php');

}

?>