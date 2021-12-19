<?php 
    if(!isset($_POST['btn-register']))
        header('Location:register.php');
?>

<?php 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    require "admin/connect.php";
    $query = "SElECT * FROM user_login WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0) {
        header('Location:register.php');
    }
    else {
        // echo $firstname;
        // echo $lastname;
        $passwordHash = password_hash($password,PASSWORD_BCRYPT);
        $query2 = "INSERT INTO user_login (firstname,lastname,email,password) Values ('$firstname','$lastname','$email','$passwordHash')";
        mysqli_query($conn,$query2);
        header('Location:login.php');
    }

?>