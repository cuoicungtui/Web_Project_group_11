<?php 
    if(!isset($_POST['btn-login']))
        header('Location:login.php');
?>

<?php 
    require "admin/connect.php";
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);

    if(password_verify($password, $data['password'])) {
        header("Location:index.php");
    }
    else {
        header('Location:login.php');
    }

?>