<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="h-100 gradient-form" style="background-image: url(./assets/img/bg.png);background-attachment: fixed;">
        <div class="container py-3 h-100">
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
                                    <h4 class="mt-1 mb-5 pb-1">Đăng Ký</h4>
                                </div>
                                
                                <form id="form" action="register_db.php" method="post" name="form">
                                    <div class="input-group mb-4">
                                        <input type="text" required name="firstname" class="form-control" placeholder="Tên" style="padding: 15px 20px; margin-right: 30px;" aria-label="Username">
                                        <input type="text" required name="lastname" class="form-control" placeholder="Họ" aria-label="Server" style="padding: 15px 20px;">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" required name="email" id="form2Example11" class="form-control email" placeholder="Email" style="padding: 15px 20px;"/>
                                        <span id="text"></span>
                                    </div>
                
                                    <div class="form-outline mb-4">
                                        <input type="password" required name="password" id="pass" class="form-control" placeholder="Mật khẩu" style="padding: 15px 20px;"/>
                                        <p id="sr-pass"></p>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password_confirm" required id="form2Example22" class="form-control" placeholder="Xác nhận mật khẩu" style="padding: 15px 20px;"/>
                                        <p id="sr-pass"></p>
                                    </div>

                                    <?php 
                                        if(isset($_GET['err1'])){
                                            echo '<p style="color: red;">
                                            <i class="bi bi-exclamation-octagon"></i>
                                            Mật khẩu không giống
                                            </p>';
                                        }
                                        if(isset($_GET['err2'])){
                                            echo '<p style="color: red;">
                                            <i class="bi bi-exclamation-octagon"></i>
                                            Email đã tồn tại
                                            </p>';
                                        }
                                    ?>
                
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button onclick="validation()" class="btn btn-block fa-lg mb-3 d-block" name="btn-register" type="submit" style="width:100%;background-color: #24a8d8; color: #fff; border-radius: 25px;">Đăng Ký</button>
                                        <span>Bằng cách nhấp vào Đăng ký, bạn đồng ý với</span>
                                        <a class="text-link" href="#!">Điều khoản dịch vụ, Chính sách dữ liệu, Chính sách cookie</a> và 
                                        <a class="text-link" href="#!"> Tiêu chuẩn cộng đồng của chúng tôi</a>
                                    </div>
                
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Bạn đã có tài khoản?</p>
                                        <a   style="color: #24a8d8; cursor: pointer; text-decoration: none;" href="login.php">Đăng nhập</a>
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
    

    <script type="text/javascript">
        function validation() {
            // if(document.form.email.value == ""){
            //     alert("Bạn chưa nhập emai!");
            //     document.form.name
            // }


            let email = document.form.email;
            let pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(pattern.test(email.value) == false) {
                let text = document.getElementById("text");
                text.value = "Emali không hợp lệ";
                text.style.backgroundColor = "red";
                email.focus();
                return false;
            }

            let pass = document.form.password;
            let passPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!"#$%&'()*+,-.\/:;<=>?\\@[\]^_`{|}~]).{6,64}$/;
            
            if(passPattern.test(pass.value) == false){
                let sr_pass = document.getElementById("sr-pass");
                sr_pass.value = 'Mật khẩu phải dài tối thiểu 6 kí tự bao gồm: chữ HOA, chữ thường, số, kí tự';
                sr_pass.style.backgroundColor = 'red';
                pass.focus();
                return false;
            }
            return true;


            // var form = document.getElementById('form');
            // var text = document.getElementById('text');

            // if(email.match(pattern)) {
            //     text.innerHTML = "Địa chỉ Email của bạn Hợp lệ.";
            //     text.style.color = "#00ff00";
            // }
            // else {
            //     text.innerHTML = "Vui lòng nhập địa chỉ email hợp lệ.";
            //     text.style.color = "#ff0000";
            // }
            // if(email == "") {
            //     text.innerHTML = "";
            //     text.style.color = "#00ff00";
            // }
        }

            

    </script>
</body>
</html>