<?php
    session_start();
    if(!isset($_SESSION['USERNAME_admin'])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Document</title>
</head>

<body style="background-color: gray;">


    <div class="container my-container ">
        <img src="../assets/img/hahalolo.png" class="rounded mx-auto d-block img_admin_login " alt="...">
        <h1 class="text-center">Đăng kí</h1>
        <Form>
            <div>
            <label for="username">Usename</label>
            <input type="text" id = "username">
            </div>
           <div></div>
           <div></div>
           <div></div>
            <label for="email">Email</label>
            <input type="text" id = "email">
            <label for="password">Password1</label>
            <input type="text" id="password">
            <label for="re_password">Password2</label>
            <input type="text" id = "re_password">

        </Form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


<!-- password_hash -->