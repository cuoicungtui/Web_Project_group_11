<?php 
    if(!isset($_POST['btn2'])) {
        header('Location: index.php');
    }
?>

<?php
    $location1 = $_POST['form2-select1'];
    $location2 = $_POST['form2-select2'];
    $day = $_POST['day3'];
    $adult = $_POST['adult2'];
    $children = $_POST['children2'];
    $baby = $_POST['baby2'];
?>
<?php include('header.php') ?>



    <div id="main">
        <div class="container">
            <div class="row">
                <div class="main-top">
                    <h2 class="main-title">
                        Kết quả tìm kiếm "chuyến bay khứ hồi"
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
                
                <style>
                    .hidden {
                        display : none;
                    }
                </style>
                <div class="AC1">
                    <div class="flight ps-3">
                        <p class="light-title">Chuyến bay đi</p>
                        <div class="adress">
                            <span>
                                <?php 
                                    echo $location1;
                                ?>
                            </span> 
                            <i class="bi bi-arrow-right"></i>
                            <span>
                                <?php 
                                    echo $location2;
                                ?>
                            </span>
                        </div>
                        <div class="date">
                            <?php 
                                echo $day;
                            ?>
                        </div>
                    </div>
                        <?php 
                        require_once 'admin/connect.php';
                            $query = "SELECT * FROM list_flight, list_planes Where list_flight.Code_Plane = list_planes.Code_Plane and Departure_Plane = '$location1' and To_Plane = '$location2' and Start_Date = '$day'";
                            $result = mysqli_query($conn,$query);
                            // $row = mysqli_fetch_assoc($result);
                            // $rowcount=mysqli_num_rows($result);
                            

                            while($row = mysqli_fetch_assoc($result)){
                                $totalPeople = (int)$adult + (int)$children;
                                $price1 = ((int)$row['Price_L1'] + (int)('573000'))*$adult;
                                if($children != '') {
                                    $price2 = ((int)$row['Price_L1'] + (int)('473000'))*$children;
                                }
                                else{
                                    $price2 = 0;
                                }
                                if($baby != '') {
                                    $price3 = ((int)$row['Price_L1'] + (int)('7000'))*$baby;
                                }
                                else{
                                    $price3 = 0;
                                }
                                $totalPrice = (int)$price1 + (int)$price2 + (int)$price3 + 1053000;

                                // phổ thông
                                $price1_1 = ((int)$row['Price_L2'] + (int)('573000'))*$adult;
                                if($children != '') {
                                    $price2_1 = ((int)$row['Price_L2'] + (int)('473000'))*$children;
                                }
                                else{
                                    $price2_1 = 0;
                                }
                                if($baby != '') {
                                    $price3_1 = ((int)$row['Price_L2'] + (int)('7000'))*$baby;
                                }
                                else{
                                    $price3_1 = 0;
                                }
                                $totalPrice1 = (int)$price1_1 + (int)$price2_1 + (int)$price3_1 + 1053000;
                                ?>
                                    <div class="containerC">
                                        <div class="row ticket mt-4">
                                            <input type="text" style="display: none;">
                                            <div class="col-md-6 col-lg-3 mb-2 ">
                                                <div class="ticket-logo">
                                                    <?php 
                                                        echo '<img src="';
                                                        echo $row['img'];
                                                        echo '" alt="">';
                                                    ?>

                                                    <div class="ticket-title">
                                                        <h6 name="ticket-title">
                                                            <?php 
                                                                echo $row['Name_Airline'];
                                                            ?>
                                                        </h6>
                                                        <span class="gray">Thương gia</span>
                                                        <p class="gray">(ECONOMYSAVER)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <h6 class="ticket-logoID ps-5">
                                                        <?php 
                                                            echo $row['Code_Plane'];
                                                        ?>
                                                    </h6>
                                                    <div class="time pe-4">
                                                        <span class="gray">
                                                            <?php 
                                                                echo $row['Start_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['Start_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['Departure_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <div class="ticket-icon ms-3">
                                                        <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                                        <p>Bay thẳng</p>
                                                    </div>
                                                    <div class="time me-4">
                                                        <span class="gray">
                                                            <?php 
                                                            echo $row['End_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['End_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['To_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <p class="ms-3 detail">Chi tiết</p>
                                                    <div class="ticket-price">
                                                        <h5 class="red">
                                                            <?php 
                                                                echo $row['Price_L1'];
                                                                echo '₫';
                                                            ?>
                                                        </h5>
                                                        <?php 

                                                        ?>
                                                        <div class="btn-bookT btn-choose activeS">Chọn</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row details-wrap pt-2 mb-3">
                                            <div class="details mt-3">
                                                <div class="detail-left">
                                                    <h5 class="ms-3 mb-3 detail-title">Chi tiết chuyến bay</h5>
                                                    <div class="ticket-logo-left">
                                                        <?php 
                                                            echo '<img src="';
                                                            echo $row['img'];
                                                            echo '" alt="">';
                                                        ?>
                                                        <div class="ticket-title-left">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Name_Airline'];
                                                                ?>
                                                                <span class="ms-3">
                                                                    <?php 
                                                                        echo $row['Code_Plane'];
                                                                    ?>
                                                                </span>
                                                            </h6>
                                                            <span class="gray ticket-text">Hạng vé: ECONOMYSAVER</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Start_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['Start_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['Departure_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="detail-line"></div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['End_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['End_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['To_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="detail-right">
                                                    <h5 class="mb-3 detail-title">Chi tiết giá vé</h5>
                                                    <div class="ticket-right">
                                                        <div class="ticket-title-right">
                                                            <h6>Hành khách</h6>
                                                            <span class="gray ticket-text">Người lớn</span>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">Trẻ em</p>';
                                                                }
                                                            ?>
                                                            <?php 
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">Em bé</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Số lượng</h6>
                                                            <span class="gray ticket-text">
                                                                <?php
                                                                    echo $adult;
                                                                ?>
                                                            </span>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $children;
                                                                    echo '</p>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $baby;
                                                                    echo '</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Giá mỗi vé</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Thuế & phí</h6>
                                                            <h6 class="primary ticket-text">573.000 ₫</h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo'<h6 class="primary ticket-text">473.000 ₫</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo'<h6 class="primary ticket-text">7.000 ₫</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Tổng cộng</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $price1;
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price2;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price3;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="ticket-price">
                                                        <h6>Tổng tiền:
                                                            <span class="red">
                                                                <?php 
                                                                    echo $totalPrice;
                                                                    echo '₫';
                                                                ?>
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="mt-3 mb-3">

                                            <div class="details-bottom pb-3">
                                                <h5 class="ms-3 mb-3 detail-title">Chi tiết giá vé:</h5>
                                                <ul class="detail-lists">
                                                    <li class="detail-item ticket-text gray">Hành lý xách tay : 07 kg.</li>
                                                    <li class="detail-item ticket-text gray">Hành lý ký gửi : 20 kg.</li>
                                                    <li class="detail-item ticket-text gray">Đổi ngày/giờ/chặng bay : Thu phí 270,000VNĐ + chênh lệch giá vé (nếu có).</li>
                                                    <li class="detail-item ticket-text gray">Đổi tên : Thu phí 350,000VNĐ.</li>
                                                    <li class="detail-item ticket-text gray">Hoàn vé : Không được phép.</li>
                                                    <li class="detail-item ticket-text gray">Thời hạn thay đổi : Tất cả các thay đổi phải được thực hiện và hoàn tất tối thiểu 03 giờ trước giờ khởi hành chuyến bay.</li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="containerC">
                                        <div class="row ticket mt-4">
                                            <input type="text" style="display: none;">
                                            <div class="col-md-6 col-lg-3 mb-2 ">
                                                <div class="ticket-logo">
                                                    <?php 
                                                        echo '<img src="';
                                                        echo $row['img'];
                                                        echo '" alt="">';
                                                    ?>

                                                    <div class="ticket-title">
                                                        <h6 name="ticket-title">
                                                            <?php 
                                                                echo $row['Name_Airline'];
                                                            ?>
                                                        </h6>
                                                        <span class="gray">Phổ thông</span>
                                                        <p class="gray">(ECONOMYSAVER)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <h6 class="ticket-logoID ps-5">
                                                        <?php 
                                                            echo $row['Code_Plane'];
                                                        ?>
                                                    </h6>
                                                    <div class="time pe-4">
                                                        <span class="gray">
                                                            <?php 
                                                                echo $row['Start_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['Start_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['Departure_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <div class="ticket-icon ms-3">
                                                        <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                                        <p>Bay thẳng</p>
                                                    </div>
                                                    <div class="time me-4">
                                                        <span class="gray">
                                                            <?php 
                                                            echo $row['End_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['End_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['To_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <p class="ms-3 detail">Chi tiết</p>
                                                    <div class="ticket-price">
                                                        <h5 class="red">
                                                            <?php 
                                                                echo $row['Price_L2'];
                                                                echo '₫';
                                                            ?>
                                                        </h5>
                                                        <a href="information.php?adult=<?php echo $adult?>&children=<?php echo $children?>&baby=<?php echo $baby?>&flight=<?php echo $row['Code_Flight']?>&1&location2=<?php echo $location2?>&totalPrice=<?php echo $totalPrice?>">
                                                        <div class="btn-bookT btn-choose">Chọn</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row details-wrap pt-2 mb-3">
                                            <div class="details mt-3">
                                                <div class="detail-left">
                                                    <h5 class="ms-3 mb-3 detail-title">Chi tiết chuyến bay</h5>
                                                    <div class="ticket-logo-left">
                                                        <?php 
                                                            echo '<img src="';
                                                            echo $row['img'];
                                                            echo '" alt="">';
                                                        ?>
                                                        <div class="ticket-title-left">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Name_Airline'];
                                                                ?>
                                                                <span class="ms-3">
                                                                    <?php 
                                                                        echo $row['Code_Plane'];
                                                                    ?>
                                                                </span>
                                                            </h6>
                                                            <span class="gray ticket-text">Hạng vé: ECONOMYSAVER</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Start_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['Start_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['Departure_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="detail-line"></div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['End_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['End_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['To_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="detail-right">
                                                    <h5 class="mb-3 detail-title">Chi tiết giá vé</h5>
                                                    <div class="ticket-right">
                                                        <div class="ticket-title-right">
                                                            <h6>Hành khách</h6>
                                                            <span class="gray ticket-text">Người lớn</span>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">Trẻ em</p>';
                                                                }
                                                            ?>
                                                            <?php 
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">Em bé</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Số lượng</h6>
                                                            <span class="gray ticket-text">
                                                                <?php
                                                                    echo $adult;
                                                                ?>
                                                            </span>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $children;
                                                                    echo '</p>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $baby;
                                                                    echo '</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Giá mỗi vé</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Thuế & phí</h6>
                                                            <h6 class="primary ticket-text">573.000 ₫</h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo'<h6 class="primary ticket-text">473.000 ₫</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo'<h6 class="primary ticket-text">7.000 ₫</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Tổng cộng</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $price1_1;
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price2_1;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price3_1;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="ticket-price">
                                                        <h6>Tổng tiền:
                                                            <span class="red">
                                                                <?php 
                                                                    echo $totalPrice1;
                                                                    echo '₫';
                                                                ?>
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="mt-3 mb-3">

                                            <div class="details-bottom pb-3">
                                                <h5 class="ms-3 mb-3 detail-title">Chi tiết giá vé:</h5>
                                                <ul class="detail-lists">
                                                    <li class="detail-item ticket-text gray">Hành lý xách tay : 07 kg.</li>
                                                    <li class="detail-item ticket-text gray">Hành lý ký gửi : 20 kg.</li>
                                                    <li class="detail-item ticket-text gray">Đổi ngày/giờ/chặng bay : Thu phí 270,000VNĐ + chênh lệch giá vé (nếu có).</li>
                                                    <li class="detail-item ticket-text gray">Đổi tên : Thu phí 350,000VNĐ.</li>
                                                    <li class="detail-item ticket-text gray">Hoàn vé : Không được phép.</li>
                                                    <li class="detail-item ticket-text gray">Thời hạn thay đổi : Tất cả các thay đổi phải được thực hiện và hoàn tất tối thiểu 03 giờ trước giờ khởi hành chuyến bay.</li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                <?php
                            }
                            

                        ?>
                </div>

                <!-- chuyến bay về -->
                <div class="AC2 hidden">
                    <div class="flight ps-3">
                        <p class="light-title">Chuyến bay về</p>
                        <div class="adress">
                            <span>
                                <?php 
                                    echo $location2;
                                ?>
                            </span> 
                            <i class="bi bi-arrow-right"></i>
                            <span>
                                <?php 
                                    echo $location1;
                                ?>
                            </span>
                        </div>
                        <div class="date">
                            <?php 
                                echo $day;
                            ?>
                        </div>
                    </div>
                        <?php 
                        require_once 'admin/connect.php';
                            $day4 = $_POST['day4'];
                            $query = "SELECT * FROM list_flight, list_planes Where list_flight.Code_Plane = list_planes.Code_Plane and Departure_Plane = '$location2' and To_Plane = '$location1' and Start_Date = '$day4'";
                            $result = mysqli_query($conn,$query);
                            // $row = mysqli_fetch_assoc($result);
                            // $rowcount=mysqli_num_rows($result);
                            
    
                            while($row = mysqli_fetch_assoc($result)){
                                $totalPeople = (int)$adult + (int)$children;
                                $price1 = ((int)$row['Price_L1'] + (int)('573000'))*$adult;
                                if($children != '') {
                                    $price2 = ((int)$row['Price_L1'] + (int)('473000'))*$children;
                                }
                                else{
                                    $price2 = 0;
                                }
                                if($baby != '') {
                                    $price3 = ((int)$row['Price_L1'] + (int)('7000'))*$baby;
                                }
                                else{
                                    $price3 = 0;
                                }
                                $totalPrice = (int)$price1 + (int)$price2 + (int)$price3 + 1053000;
    
                                // phổ thông
                                $price1_1 = ((int)$row['Price_L2'] + (int)('573000'))*$adult;
                                if($children != '') {
                                    $price2_1 = ((int)$row['Price_L2'] + (int)('473000'))*$children;
                                }
                                else{
                                    $price2_1 = 0;
                                }
                                if($baby != '') {
                                    $price3_1 = ((int)$row['Price_L2'] + (int)('7000'))*$baby;
                                }
                                else{
                                    $price3_1 = 0;
                                }
                                $totalPrice1 = (int)$price1_1 + (int)$price2_1 + (int)$price3_1 + 1053000;
                                ?>
                                    <div class="containerC">
                                        <div class="row ticket mt-4">
                                            <input type="text" style="display: none;">
                                            <div class="col-md-6 col-lg-3 mb-2 ">
                                                <div class="ticket-logo">
                                                    <?php 
                                                        echo '<img src="';
                                                        echo $row['img'];
                                                        echo '" alt="">';
                                                    ?>
    
                                                    <div class="ticket-title">
                                                        <h6 name="ticket-title">
                                                            <?php 
                                                                echo $row['Name_Airline'];
                                                            ?>
                                                        </h6>
                                                        <span class="gray">Thương gia</span>
                                                        <p class="gray">(ECONOMYSAVER)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <h6 class="ticket-logoID ps-5">
                                                        <?php 
                                                            echo $row['Code_Plane'];
                                                        ?>
                                                    </h6>
                                                    <div class="time pe-4">
                                                        <span class="gray">
                                                            <?php 
                                                                echo $row['Start_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['Start_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['Departure_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <div class="ticket-icon ms-3">
                                                        <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                                        <p>Bay thẳng</p>
                                                    </div>
                                                    <div class="time me-4">
                                                        <span class="gray">
                                                            <?php 
                                                            echo $row['End_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['End_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['To_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <p class="ms-3 detail">Chi tiết</p>
                                                    <div class="ticket-price">
                                                        <h5 class="red">
                                                            <?php 
                                                                echo $row['Price_L1'];
                                                                echo '₫';
                                                            ?>
                                                        </h5>
                                                        <?php 
    
                                                        ?>
                                                        <div class="btn-bookT btn-choose activeS">Chọn</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row details-wrap pt-2 mb-3">
                                            <div class="details mt-3">
                                                <div class="detail-left">
                                                    <h5 class="ms-3 mb-3 detail-title">Chi tiết chuyến bay</h5>
                                                    <div class="ticket-logo-left">
                                                        <?php 
                                                            echo '<img src="';
                                                            echo $row['img'];
                                                            echo '" alt="">';
                                                        ?>
                                                        <div class="ticket-title-left">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Name_Airline'];
                                                                ?>
                                                                <span class="ms-3">
                                                                    <?php 
                                                                        echo $row['Code_Plane'];
                                                                    ?>
                                                                </span>
                                                            </h6>
                                                            <span class="gray ticket-text">Hạng vé: ECONOMYSAVER</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Start_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['Start_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['Departure_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="detail-line"></div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['End_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['End_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['To_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="detail-right">
                                                    <h5 class="mb-3 detail-title">Chi tiết giá vé</h5>
                                                    <div class="ticket-right">
                                                        <div class="ticket-title-right">
                                                            <h6>Hành khách</h6>
                                                            <span class="gray ticket-text">Người lớn</span>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">Trẻ em</p>';
                                                                }
                                                            ?>
                                                            <?php 
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">Em bé</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Số lượng</h6>
                                                            <span class="gray ticket-text">
                                                                <?php
                                                                    echo $adult;
                                                                ?>
                                                            </span>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $children;
                                                                    echo '</p>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $baby;
                                                                    echo '</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Giá mỗi vé</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L1'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Thuế & phí</h6>
                                                            <h6 class="primary ticket-text">573.000 ₫</h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo'<h6 class="primary ticket-text">473.000 ₫</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo'<h6 class="primary ticket-text">7.000 ₫</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Tổng cộng</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $price1;
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price2;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price3;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="ticket-price">
                                                        <h6>Tổng tiền:
                                                            <span class="red">
                                                                <?php 
                                                                    echo $totalPrice;
                                                                    echo '₫';
                                                                ?>
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <hr class="mt-3 mb-3">
    
                                            <div class="details-bottom pb-3">
                                                <h5 class="ms-3 mb-3 detail-title">Chi tiết giá vé:</h5>
                                                <ul class="detail-lists">
                                                    <li class="detail-item ticket-text gray">Hành lý xách tay : 07 kg.</li>
                                                    <li class="detail-item ticket-text gray">Hành lý ký gửi : 20 kg.</li>
                                                    <li class="detail-item ticket-text gray">Đổi ngày/giờ/chặng bay : Thu phí 270,000VNĐ + chênh lệch giá vé (nếu có).</li>
                                                    <li class="detail-item ticket-text gray">Đổi tên : Thu phí 350,000VNĐ.</li>
                                                    <li class="detail-item ticket-text gray">Hoàn vé : Không được phép.</li>
                                                    <li class="detail-item ticket-text gray">Thời hạn thay đổi : Tất cả các thay đổi phải được thực hiện và hoàn tất tối thiểu 03 giờ trước giờ khởi hành chuyến bay.</li>
                                                </ul>
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                    <div class="containerC">
                                        <div class="row ticket mt-4">
                                            <input type="text" style="display: none;">
                                            <div class="col-md-6 col-lg-3 mb-2 ">
                                                <div class="ticket-logo">
                                                    <?php 
                                                        echo '<img src="';
                                                        echo $row['img'];
                                                        echo '" alt="">';
                                                    ?>
    
                                                    <div class="ticket-title">
                                                        <h6 name="ticket-title">
                                                            <?php 
                                                                echo $row['Name_Airline'];
                                                            ?>
                                                        </h6>
                                                        <span class="gray">Phổ thông</span>
                                                        <p class="gray">(ECONOMYSAVER)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <h6 class="ticket-logoID ps-5">
                                                        <?php 
                                                            echo $row['Code_Plane'];
                                                        ?>
                                                    </h6>
                                                    <div class="time pe-4">
                                                        <span class="gray">
                                                            <?php 
                                                                echo $row['Start_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['Start_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['Departure_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <div class="ticket-icon ms-3">
                                                        <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                                        <p>Bay thẳng</p>
                                                    </div>
                                                    <div class="time me-4">
                                                        <span class="gray">
                                                            <?php 
                                                            echo $row['End_Date'];
                                                            ?>
                                                        </span>
                                                        <h5>
                                                            <?php 
                                                                echo $row['End_Time'];
                                                            ?>
                                                        </h5>
                                                        <h6>
                                                            <?php 
                                                                echo $row['To_Plane'];
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-2">
                                                <div class="ticket-logo">
                                                    <p class="ms-3 detail">Chi tiết</p>
                                                    <div class="ticket-price">
                                                        <h5 class="red">
                                                            <?php 
                                                                echo $row['Price_L2'];
                                                                echo '₫';
                                                            ?>
                                                        </h5>
                                                        <a href="information.php?adult=<?php echo $adult?>&children=<?php echo $children?>&baby=<?php echo $baby?>&flight=<?php echo $row['Code_Flight']?>&1&location2=<?php echo $location2?>&totalPrice=<?php echo $totalPrice?>">
                                                        <div class="btn-bookT btn-choose">Chọn</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row details-wrap pt-2 mb-3">
                                            <div class="details mt-3">
                                                <div class="detail-left">
                                                    <h5 class="ms-3 mb-3 detail-title">Chi tiết chuyến bay</h5>
                                                    <div class="ticket-logo-left">
                                                        <?php 
                                                            echo '<img src="';
                                                            echo $row['img'];
                                                            echo '" alt="">';
                                                        ?>
                                                        <div class="ticket-title-left">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Name_Airline'];
                                                                ?>
                                                                <span class="ms-3">
                                                                    <?php 
                                                                        echo $row['Code_Plane'];
                                                                    ?>
                                                                </span>
                                                            </h6>
                                                            <span class="gray ticket-text">Hạng vé: ECONOMYSAVER</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['Start_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['Start_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['Departure_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="detail-line"></div>
                                                    <div class="detail-adress">
                                                        <i class="fa fa-plane primary p-3"></i>
                                                        <div class="detail-time ms-3 me-4">
                                                            <h6>
                                                                <?php 
                                                                    echo $row['End_Time'];
                                                                ?>
                                                            </h6>
                                                            <span class="gray ticket-tex">
                                                                <?php 
                                                                    echo $row['End_Date'];
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="detail-location">
                                                            <h6 class="detail-location-title">
                                                                <?php 
                                                                    echo $row['To_Plane'];
                                                                ?>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="detail-right">
                                                    <h5 class="mb-3 detail-title">Chi tiết giá vé</h5>
                                                    <div class="ticket-right">
                                                        <div class="ticket-title-right">
                                                            <h6>Hành khách</h6>
                                                            <span class="gray ticket-text">Người lớn</span>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">Trẻ em</p>';
                                                                }
                                                            ?>
                                                            <?php 
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">Em bé</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Số lượng</h6>
                                                            <span class="gray ticket-text">
                                                                <?php
                                                                    echo $adult;
                                                                ?>
                                                            </span>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $children;
                                                                    echo '</p>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<p class="gray ticket-text">';
                                                                    echo $baby;
                                                                    echo '</p>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Giá mỗi vé</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $row['Price_L2'];
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Thuế & phí</h6>
                                                            <h6 class="primary ticket-text">573.000 ₫</h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo'<h6 class="primary ticket-text">473.000 ₫</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo'<h6 class="primary ticket-text">7.000 ₫</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="ticket-title-right">
                                                            <h6>Tổng cộng</h6>
                                                            <h6 class="primary ticket-text">
                                                                <?php 
                                                                    echo $price1_1;
                                                                    echo '₫';
                                                                ?>
                                                            </h6>
                                                            <?php 
                                                                if($children != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price2_1;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                                if($baby != ''){
                                                                    echo '<h6 class="primary ticket-text">';
                                                                    echo $price3_1;
                                                                    echo '₫';
                                                                    echo '</h6>';
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="ticket-price">
                                                        <h6>Tổng tiền:
                                                            <span class="red">
                                                                <?php 
                                                                    echo $totalPrice1;
                                                                    echo '₫';
                                                                ?>
                                                            </span></h6>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <hr class="mt-3 mb-3">
    
                                            <div class="details-bottom pb-3">
                                                <h5 class="ms-3 mb-3 detail-title">Chi tiết giá vé:</h5>
                                                <ul class="detail-lists">
                                                    <li class="detail-item ticket-text gray">Hành lý xách tay : 07 kg.</li>
                                                    <li class="detail-item ticket-text gray">Hành lý ký gửi : 20 kg.</li>
                                                    <li class="detail-item ticket-text gray">Đổi ngày/giờ/chặng bay : Thu phí 270,000VNĐ + chênh lệch giá vé (nếu có).</li>
                                                    <li class="detail-item ticket-text gray">Đổi tên : Thu phí 350,000VNĐ.</li>
                                                    <li class="detail-item ticket-text gray">Hoàn vé : Không được phép.</li>
                                                    <li class="detail-item ticket-text gray">Thời hạn thay đổi : Tất cả các thay đổi phải được thực hiện và hoàn tất tối thiểu 03 giờ trước giờ khởi hành chuyến bay.</li>
                                                </ul>
                                            </div>
    
                                        </div>
    
                                    </div>
                                <?php
                            }
                            
    
                        ?>
                </div>

                
                    
            </div>

            <script>
                var activeS = document.querySelector('.activeS');
                var AC1 = document.querySelector('.AC1')
                var AC2 = document.querySelector('.AC2')
                activeS.addEventListener('click', function(){
                    AC2.classList.remove('hidden');
                    AC1.classList.add('hidden');
                })
            </script>

<script type="text/javascript">
    const container = document.querySelectorAll('.containerC');
    
    container.forEach((containerC, index) => {
        var detail = containerC.querySelector('.detail');
        const detailWrap = containerC.querySelector('.details-wrap');
        detail.onclick = function () {
            detailWrap.classList.toggle("details-wrap-active");
    };
});


</script>

<?php include('footer.php') ?>
