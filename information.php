<?php include('header.php') ?>

<?php 
    $adult = $_GET['adult'];
    $children = $_GET['children'];
    $baby = $_GET['baby'];
    $code_flight = $_GET['flight'];
    $lever = '';
    if (isset($_GET['1'])) {
        $lever = '1';
    }else {
        $lever = '2';
    }
    // $totalPrice = $_GET['totalPrice'];
?>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="main-top mt-6">
                <h2 class="main-title">
                    Thông tin đặt vé
                    <div class="people mt-3">
                        <i class="bi bi-people"></i>
                        <span>
                            <?php 
                                    echo $adult;
                                    echo ' người lớn ';
                                    if($children != '') {
                                        echo $children;
                                        echo ', trẻ em, ';
                                    }
                                    if($baby != '') {
                                        echo $baby;
                                        echo ' em bé';
                                    }
                                ?>
                        </span>
                    </div>
                </h2>
                <div class="main-btn"> <a href="index.php">Thay đổi tìm kiếm</a> </div>
            </div>



            <?php 
                $query = "SELECT * FROM user_login WHERE id = $id";
                require_once "admin/connect.php";
                        if(isset($_SESSION['USER'])){
                            $id = $_SESSION['USER'];
                            $query = "SELECT * FROM user_login WHERE id = $id";
                            $result = mysqli_query($conn,$query);
                            $data = mysqli_fetch_assoc($result);
                        }
            ?>
            <div class="col-md-8 info-left">
                <div class="info-top">
                    <h5>Thông tin liên hệ</h5>
                    <div class="info-name d-flex">
                        <div class="input-bookTicket col-md-6 mb-3 me-3">
                            <span>Họ tên</span>
                            <input class="name" type="text" value="<?php echo $data['firstname'] . ' ' . $data['lastname'] ?>">
                        </div>
                        
                    </div>
    
                    <div class="info-radio d-flex">
                        <p class="pe-3">Giới tính</p>
                        <?php
                            if($data['sex']==1){
                                echo '<div class="form-check form-check-inline">';
                                echo '<input class="form-check-input" type="radio" checked="true">';
                                echo '<label class="form-check-label" for="inlineRadio1">Nam</label>';
                                echo '</div>';
                                echo '<div class="form-check form-check-inline">';
                                echo '<input class="form-check-input" type="radio">';
                                echo '<label class="form-check-label" for="inlineRadio1">Nữ</label>';
                                echo '</div>';
                            }
                            else {
                                echo '<div class="form-check form-check-inline">';
                                echo '<input class="form-check-input" type="radio">';
                                echo '<label class="form-check-label" for="inlineRadio1">Nam</label>';
                                echo '</div>';
                                echo '<div class="form-check form-check-inline">';
                                echo '<input class="form-check-input" type="radio" checked="true">';
                                echo '<label class="form-check-label" for="inlineRadio1">Nữ</label>';
                                echo '</div>';
                            }
                            ?>
                            
                    </div>
    
                    <div class="email d-flex">
                        <div class="input-bookTicket col-md-6 mb-3 me-3">
                            <span>Email</span>
                            <input type="text" value="<?php echo $data['email']?>">
                        </div>
                        <div class="input-bookTicket col-md-5 mb-3">
                            <span>Số điện thoại</span>
                            <input type="text" value="<?php echo $data['sdt']?>">
                        </div>
                    </div>
    
                    <div class="input-bookTicket col-md-5 mb-3">
                        <span>Địa chỉ</span>
                        <input type="text" value="<?php echo $data['adress']?>">
                    </div>
                </div>

                <?php
                    for($i=1;$i<=(int)$adult;$i=$i+1){
                        ?>
                            <div class="info-top mb-3">
                                <h5>Thông tin người lớn 
                                    <?php echo $i ?>
                                </h5>
                                <div class="info-name d-flex">
                                    <div class="input-bookTicket col-md-6 mb-3 me-3">
                                        <span>Họ tên</span>
                                        <input id="adult" class="name1" type="text">
                                    </div>
                                </div>
            
                                <div class="info-radio d-flex">
                                    <p class="pe-3">Giới tính</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nữ</label>
                                    </div>
                                </div>
            
                                <div class="package mb-3">
                                    <h6>Hành lý ký gửi</h6>
                                    <div class="package-logo">
                                        <img class="package-logo-img" src="assets/img/lg1.png" alt="">
                                        <p class="package-text">Sân bay quốc tế Nội Bài (HAN) - Sân bay quốc tế Tân Sơn Nhất (SGN)</p> 
                                        <select name="" id="select">
                                            <option value="">10 KILO, 22 POUND</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php
                            
                        ?>
                        <?php
                    }    
                    for($i=1;$i<=(int)$children;$i=$i+1){
                        ?>
                            <div class="info-top mb-3">
                                <h5>Thông tin trẻ em
                                    <?php echo $i ?>
                                </h5>
                                <div class="info-name d-flex">
                                    <div class="input-bookTicket col-md-6 mb-3 me-3">
                                        <span>Họ tên</span>
                                        <input class="name1" type="text">
                                    </div>
                                    
                                </div>
            
                                <div class="info-radio d-flex">
                                    <p class="pe-3">Giới tính</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nữ</label>
                                    </div>
                                </div>
            
                                <div class="package mb-3">
                                    <h6>Hành lý ký gửi</h6>
                                    <div class="package-logo">
                                        <img class="package-logo-img" src="assets/img/lg1.png" alt="">
                                        <p class="package-text">Sân bay quốc tế Nội Bài (HAN) - Sân bay quốc tế Tân Sơn Nhất (SGN)</p> 
                                        <select name="" id="select">
                                            <option value="">10 KILO, 22 POUND</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php
                            
                        ?>
                        <?php
                    }
                    for($i=1;$i<=(int)$baby;$i=$i+1){
                        ?>
                            <div class="info-top mb-3">
                                <h5>Thông tin em bé
                                    <?php echo $i ?>
                                </h5>
                                <div class="info-name d-flex">
                                    <div class="input-bookTicket col-md-6 mb-3 me-3">
                                        <span>Họ tên</span>
                                        <input class="name1" type="text">
                                    </div>
                                    
                                </div>
            
                                <div class="info-radio d-flex">
                                    <p class="pe-3">Giới tính</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Nữ</label>
                                    </div>
                                </div>
            
                                <div class="package mb-3">
                                    <h6>Hành lý ký gửi</h6>
                                    <div class="package-logo">
                                        <img class="package-logo-img" src="assets/img/lg1.png" alt="">
                                        <p class="package-text">Sân bay quốc tế Nội Bài (HAN) - Sân bay quốc tế Tân Sơn Nhất (SGN)</p> 
                                        <select name="" id="select">
                                            <option value="">10 KILO, 22 POUND</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php
                            
                        ?>
                        <?php
                    }
                ?>

                <div class="btn-bookT mt-3 mb-5" id="submit">
                    Tiếp tục
                </div>

                <script>
                    var submit = document.getElementById("submit");
                    submit.addEventListener('click', function() {
                        var name = document.getElementsByClassName("name1");
                        
                        // $.ajax({
                        //     type: "Post",
                        //     url: "pay.php",
                        //     // data: {email : $(this).val()},
                        // });
                        alert(name.length);

                    })
                </script>

                <div class="note">
                    <div class="note-warning d-flex">
                        <i class="bi bi-exclamation-triangle red pe-2"></i>
                        <h5 class="red">Lưu ý</h5>
                    </div>
                    <ul class="note-list mb-5">
                        <li class="note-item mb-2">Đối với chuyến bay quốc tế hoặc quá cảnh quốc tế, hộ chiếu phải còn hiệu lực ít nhất 06 tháng trước ngày khởi hành.</li>
                        <li class="note-item mb-2">Vietnam Airlines và Bamboo Airways: Từ chối vận chuyển hành khách mang thai từ 36 tuần trở lên. Vietjet Air và Vietravel Airlines: Từ chối vận chuyển hành khách mang thai từ 32 tuần trở lên.</li>
                        <li class="note-item mb-2">Em bé từ 14 ngày đến dưới 02 tuổi cần đi cùng người lớn từ 18 tuổi trở lên.</li>
                        <li class="note-item mb-2">Độ tuổi của trẻ em/em bé sẽ được tính từ ngày sinh đến ngày khởi hành chuyến bay, căn cứ vào Giấy khai sinh/hộ chiếu của trẻ.</li>
                        <li class="note-item">Trường hợp trẻ em đi một mình vui lòng liên hệ trực tiếp đại lý để được tư vấn dịch vụ trẻ em đi một mình trên chuyến bay.</li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 info-rights">
                <div class="info-right">
                    <h5>Thông tin chuyến bay</h4>
                    <hr>
                    <div class="infoFly">
                        <div class="infoFly-title">
                            <h6>Chuyến bay</h6>
                            <?php 
                            require_once "admin/connect.php";
                                $query = "SELECT img FROM list_planes,list_flight WHERE list_planes.Code_Plane  = list_flight.Code_Plane and code_flight = '$code_flight'";
                                $result = mysqli_query($conn,$query);
                                $data = mysqli_fetch_assoc($result);
                            ?>
                            <?php
                                echo '<img class="package-logo-img" src="';
                                echo $data["img"];
                                echo '"alt="">';
                            ?>
                        </div>
    
                        <?php 
                            require_once "admin/connect.php";
                                $query = "SELECT * FROM list_flight WHERE code_flight = '$code_flight'";
                                $result = mysqli_query($conn,$query);
                                $data = mysqli_fetch_assoc($result);
                                $Price = 0;
                                if(isset($_GET['1'])){
                                    $Price = $data['Price_L1'];
                                }else {
                                    $Price = $data['Price_L2'];
                                }
                                $price1 = ($Price + (int)('573000'))*$adult;
                                if($children != '') {
                                    $price2 = ($Price + (int)('473000'))*$children;
                                }
                                else{
                                    $price2 = 0;
                                }
                                if($baby != '') {
                                    $price3 = ($Price + (int)('7000'))*$baby;
                                }
                                else{
                                    $price3 = 0;
                                }
                                $totalPrice = (int)$price1 + (int)$price2 + (int)$price3 + 1053000;
                        ?>

                        <div class="infoFly-time">
                            <p class="infoFly-text">
                                <?php echo $data['Start_Date']?>
                            </p> 
                            <p class="infoFly-customer">Hành khách: 
                                <?php 
                                    echo $adult;
                                    echo ' người lớn, ';
                                    if($children != '') {
                                        echo $children;
                                        echo ' trẻ em, ';
                                    }
                                    if($baby != '') {
                                        echo $baby;
                                        echo ' em bé';
                                    }
                                ?>
                            </p>
                        </div>
                                    
                        <div class="ticket-logo">
                            <div class="time">
                                <span class="gray">
                                    <?php echo $data['Start_Date']?>
                                </span>
                                <h5>
                                    <?php echo $data['Start_Time']?>
                                </h5>
                                <h6>
                                    <?php echo $data['Departure_Plane']?>
                                </h6>
                            </div>
                            <div class="ticket-icon ms-3">
                                <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                <p>Bay thẳng</p>
                            </div>
                            <div class="time">
                                <span class="gray">
                                    <?php echo $data['End_Date']?>
                                </span>
                                <h5>
                                    <?php echo $data['End_Time']?>
                                </h5>
                                <h6>
                                    <?php echo $data['To_Plane']?>
                                </h6>
                            </div>
                        </div>
    
                        <div class="info-price">
                            <p>Giá: </p>
                            <p class="red ps-3">
                                <?php echo $totalPrice . ' ₫'?>
                            </p>
                        </div>
    
                        <hr>
    
                        <div class="info-bottom">
                            <h6>Chi tiết giá vé</h6>
                            <div class="adult mt-3">
                                <p class="adult-text">Người lớn x
                                    <?php echo $adult ?>
                                </p> 
                                <div class="aldult-price">
                                    <?php echo $price1 . ' ₫'?>
                                </div>
                            </div>
                            <?php 
                                if($children > 0){
                                    ?>
                                    <div class="adult">
                                        <p class="adult-text">Trẻ em x
                                            <?php echo $children . ' ₫'?>
                                        </p>
                                        <div class="aldult-price">
                                            <?php echo $price2 . ' ₫'?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($baby>0){
                                    ?>
                                    <div class="adult">
                                        <p class="adult-text">Em bé x
                                            <?php echo $baby ?>
                                        </p>
                                        <div class="aldult-price">
                                            <?php echo $price3 . ' ₫'?>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                            <div class="adult">
                                <p class="adult-text">Phí & Thuế</p>
                                <div class="aldult-price">1053000 ₫</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>