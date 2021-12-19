<?php 
    if(!isset($_POST['btn-login']))
        header('Location:login.php');
?>

<?php 
    require "admin/connect.php";
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM user_login WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);

    // if(password_verify($password, $data['password'])) {
        // if($password = $data['password']) {
        if(password_verify($password, $data['password'])) {
        header("Location:index.php");
        // echo password_verify($password, $data['password']);
    }
    else {
        // header('Location:login.php');
        // echo $password;
        // echo $data['password'];
        echo 'abc';

    }

?>