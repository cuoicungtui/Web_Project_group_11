<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <title>Document</title>
</head>

<body style="background-image: url(../assets/img/bg.png); background-attachment: fixed;">
    <div class="container-fruit  fixed-top ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/img/hahalolo.png" alt="" width="35" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Account_admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="News.php">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Manages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="flight_admin.php">Flight Manager </a></li>
                                <li><a class="dropdown-item" href="plane_admin.php">Plane Manager</a></li>
                                <li><a class="dropdown-item" href="customer_admin.php">Customer Manager</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><?php echo $_SESSION['USERNAME_admin'] ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout_admin.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>