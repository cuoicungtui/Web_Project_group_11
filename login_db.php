<?php 
    if(!isset($_POST['btn-login']))
        header('Location:login.php');
?>

<?php 
    session_start();
    require "admin/connect.php";
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM user_login WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    if(empty($data)){
        header('Location:login.php?err1');
        return;
    }
    

    if(password_verify($password,$data['password'])){
        $_SESSION['USER'] = $data['id'];
        header('Location:index.php');
    }
    else {
        header('Location:login.php?err2');
    }

?>