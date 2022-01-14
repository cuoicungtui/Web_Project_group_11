<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt vé máy bay | Hahalolo</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/ticket.css">
    <link rel="stylesheet" href="./assets/css/order.css">
    <link rel="stylesheet" href="./assets/css/infomation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
        <a class="navbar-brand navbar-logo" href="#">
            <img src="assets/img/hahalolo.png" height="40" alt="hahalolo" loading="lazy"/>
            <div class="navbar-input input-search">
                <input class="navbar-search" type="text" placeholder="Tìm kiếm">
                <i class="bi bi-search"></i>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="header-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-newspaper"></i> 
                        </div>
                        <p>Bảng tin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-umbrella"></i>
                        </div>
                        <p>Trải nghiệm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle circle1"></div>
                            <i class="bi bi-geo"></i>
                        </div>
                        <p>Tour</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-building"></i>
                        </div>
                        <p>Khách sạn</p>
                    </a>
                </li>
                <li class="nav-item active-navbar">
                    <a class="nav-link" href="index.php">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-send"></i>
                        </div>
                        <p>Vé máy bay</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-truck"></i>
                        </div>
                        <p>Cho thuê xe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-bag"></i>
                        </div>
                        <p>Mua sắm</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center icon-size">
            <a class="cart text-reset me-4" href="#">
                <i class="bi bi-cart3"></i>
            </a>
            
            <div class="cart-wrap">
                <h5 class="mb-3">Giỏ hàng</h5>
                <h6>Thanh toán</h6>
                <div class="cart-product">
                    <i class="bi bi-cart3"></i>
                    <p class="cart-product-text">Không có sản phẩm nào trong giỏ hàng của bạn</p>
                </div>
            </div>

            <a class="text-reset me-4" href="#">
                <i class="bi bi-wallet"></i>
            </a>
            <a class="text-reset me-4" href="#">
                <i class="bi bi-messenger"></i>
            </a>
            <a class="d-flex align-items-center hidden-arrow focus-avatar" href="#" role="button" aria-expanded="false">
                <img src="./assets/img/no-avatar.png" class="rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy"/>
            </a>
            <div class="manage-wrap">
                <?php 
                    require_once "admin/connect.php";
                    if(isset($_SESSION['USER'])){
                        $id = $_SESSION['USER'];
                        $query = "SELECT * FROM user_login WHERE id = $id";
                        $result = mysqli_query($conn,$query);
                        $data = mysqli_fetch_assoc($result);
                        ?>
                            <a href="order.php" class="manage-link">
                                <i class="bi bi-journal-bookmark"></i>
                                <p>Quản lý đơn hàng</p>
                            </a>
                            <a class="login-link" href="user_information.php">
                                <i class="bi bi-person"></i>
                                <p>
                                    <?php
                                        echo $data['firstname'];
                                        echo ' ';
                                        echo $data['lastname'];
                                    ?>
                                </p>
                            </a>
                        <?php
                        ?>
                            <a href="login.php" class="login-link">
                                <i class="bi bi-box-arrow-in-left"></i>
                                <p>Đăng xuất</p>
                            </a>
                        <?php
                    }
                    else {
                        ?>
                            <a href="login.php" class="login-link">
                                <i class="bi bi-box-arrow-in-left"></i>
                                <p>Đăng nhập</p>
                            </a>
                        <?php
                    }
                ?> 
                
            </div>
        </div>

    </nav>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-light header fixed-top">
        <div class="container-fluid navbar-heading">
            <div class="" >
                <a class="navbar-brand navbar-logo" href="#">
                    <img src="assets/img/hahalolo.png" height="40" alt="hahalolo" loading="lazy"/>
                    <div class="navbar-input input-search">
                        <input class="navbar-search" type="text" placeholder="Tìm kiếm">
                        <i class="bi bi-search"></i>
                    </div>
                </a>
            </div>

            <ul class="header-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-newspaper"></i> 
                        </div>
                        <p>Bảng tin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-umbrella"></i>
                        </div>
                        <p>Trải nghiệm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle circle1"></div>
                            <i class="bi bi-geo"></i>
                        </div>
                        <p>Tour</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-building"></i>
                        </div>
                        <p>Khách sạn</p>
                    </a>
                </li>
                <li class="nav-item active-navbar">
                    <a class="nav-link" href="index.php">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-send"></i>
                        </div>
                        <p>Vé máy bay</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-truck"></i>
                        </div>
                        <p>Cho thuê xe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="navbar-item-wrap">
                            <div class="circle"></div>
                            <i class="bi bi-bag"></i>
                        </div>
                        <p>Mua sắm</p>
                    </a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center icon-size">
                <a class="cart text-reset me-4" href="#">
                    <i class="bi bi-cart3"></i>
                </a>
                
                <div class="cart-wrap">
                    <h5 class="mb-3">Giỏ hàng</h5>
                    <h6>Thanh toán</h6>
                    <div class="cart-product">
                        <i class="bi bi-cart3"></i>
                        <p class="cart-product-text">Không có sản phẩm nào trong giỏ hàng của bạn</p>
                    </div>
                </div>

                <a class="text-reset me-4" href="#">
                    <i class="bi bi-wallet"></i>
                </a>
                <a class="text-reset me-4" href="#">
                    <i class="bi bi-messenger"></i>
                </a>
                <a class="d-flex align-items-center hidden-arrow focus-avatar" href="#" role="button" aria-expanded="false">
                    <img src="./assets/img/no-avatar.png" class="rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy"/>
                </a>
                <div class="manage-wrap">
                    
                    <?php 
                        // require_once "admin/connect.php";
                        // if(isset($_SESSION['USER'])){
                        //     $id = $_SESSION['USER'];
                        //     $query = "SELECT * FROM user_login WHERE id = $id";
                        //     $result = mysqli_query($conn,$query);
                        //     $data = mysqli_fetch_assoc($result);
                        ?>
                                <a href="order.php" class="manage-link">
                                    <i class="bi bi-journal-bookmark"></i>
                                    <p>Quản lý đơn hàng</p>
                                </a>
                                <a class="login-link" href="user_information.php">
                                    <i class="bi bi-person"></i>
                                    <p>
                                        <?php
                                            // echo $data['firstname'];
                                            // echo ' ';
                                            // echo $data['lastname'];
                                        ?>
                                    </p>
                                </a>
                            <?php
                            ?>
                                <a href="login.php" class="login-link">
                                    <i class="bi bi-box-arrow-in-left"></i>
                                    <p>Đăng xuất</p>
                                </a>
                            <?php
                        // }
                        // else {
                            ?>
                                <a href="login.php" class="login-link">
                                    <i class="bi bi-box-arrow-in-left"></i>
                                    <p>Đăng nhập</p>
                                </a>
                            <?php
                        // }
                    ?> 
                    
                    
                    
                </div>
            </div>

            
        </div>
    </nav> -->


            

