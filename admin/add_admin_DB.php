<?php
    session_start();
    if (!isset($_SESSION['USERNAME_admin'])) {
        header("location:index.php");
      }
?>

<?php
    require "connect.php";
    $first_name = $_POST['first_name'];
    $password = $_POST['password'];
    $password_hash = password_hash($password,PASSWORD_BCRYPT);
    $query = "SELECT * FROM admin Where UseName = '$first_name'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $err = "error";
        header("location:add_admin.php?err=$err");
    }
    else{
        $query = "INSERT INTO admin(UseName,PASSWORD) VALUES('$first_name','$password_hash')";
        mysqli_query($conn,$query);
        echo $query;
        header("location:Account_admin.php");
    }
        

?>