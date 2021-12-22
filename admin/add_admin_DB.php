<?php
    session_start();
    if (!isset($_SESSION['USERNAME_admin'])) {
        header("location:index.php");
    }
    $err = 0;
?>

<?php
    if($_POST['password'] == "" || $_POST['first_name'] == "" || $_POST['password_confirm'] == ""){
        $err=1;
        header("location:add_admin.php?err1=$err");
        return;
    }else{
        if($_POST['password'] != $_POST['password_confirm']){
            $err=2;
            header("location:add_admin.php?err1=$err");
            return;
        }
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
        $err =3;
        header("location:add_admin.php?err1=$err");
    }
    else{
        $query = "INSERT INTO admin(UseName,PASSWORD) VALUES('$first_name','$password_hash')";
        mysqli_query($conn,$query);
        echo $query;
        header("location:Account_admin.php");
    }
        

?>