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


    if(password_verify($password,$data['password'])){
        // $_SESSION['USERNAME_admin'] = $firstname and $lastname;
        header('Location:index.php');
    }
    else {
        header('Location:login.php');
    }

?>