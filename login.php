<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
    <section class="h-100 gradient-form" style="background-image: url(./assets/img/bg.png);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class=" px-3 py-4 p-md-5 mx-md-4">
                                    <div class="image mb-3">
                                        <img src="./assets/img/hahalolo.png" style="width: 60px;" alt="logo">
                                        <span class="img-logo-name">Hahalolo</span>
                                    </div>
                                    <h4>Bạn thích</h4>
                                    <h1 style="font-size: 3rem;">đi du lịch?</h1>
                                    <h4 class="mb-3">Bạn muốn tìm hiểu thông tin về những điểm đến?</h4>
                                    <p class="mb-0">Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                
                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Đăng Nhập</h4>
                                </div>
            
                                <form action="login_db.php" method="post">
                                    <p>Please login to your account</p>
                                    <div class="form-outline">
                                        <input type="email" required name="email" id="form2Example11" class="form-control" placeholder="Email" style="padding: 15px 20px;"/>
                                        <label class="form-label" for="form2Example11"></label>
                                    </div>

                                    <?php 
                                        if(isset($_GET['err1'])){
                                            echo '<p style="color: red;">
                                            <i class="bi bi-exclamation-octagon"></i>
                                            Email không tồn tại
                                            </p>';
                                        }
                                    ?>

                                    <div class="form-outline mb-4">
                                        <input type="password" required name="password" id="form2Example22" class="form-control" placeholder="Mật khẩu" style="padding: 15px 20px;"/>
                                        <label class="form-label" for="form2Example22"></label>
                                    </div>

                                    <?php 
                                        if(isset($_GET['err2'])){
                                            echo '<p style="color: red;">
                                            <i class="bi bi-exclamation-octagon"></i>
                                            Mật khẩu sai
                                            </p>';
                                        }
                                    ?>
                
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-block fa-lg mb-3 d-block" name="btn-login" type="submit" style="width:100%;background-color: #24a8d8; color: #fff; border-radius: 25px;">Đăng Nhập</button>
                                    </div>
                
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Bạn chưa có tài khoản?</p>
                                        <a  style="color: #24a8d8; cursor: pointer; text-decoration: none;" href="register.php">Đăng ký tại đây!</a>
                                    </div>
                
                                </form>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>