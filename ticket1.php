<?php 
    if(!isset($_POST['btn1'])) {
        header('Location: index.php');
    }
?>

<?php
    $location1 = $_POST['form1-select1'];
    $location2 = $_POST['form1-select2'];
    $day = $_POST['day1'];
    $adult = $_POST['adult1'];
    $children = $_POST['children1'];
    $baby = $_POST['baby1'];

?>
<?php include('header.php') ?>


    <div id="main">
        <div class="container">
            <div class="row">
                <div class="main-top">
                    <h2 class="main-title">
                        Kết quả tìm kiếm "chuyến bay một chiều"
                        <div class="people mt-3">
                            <i class="bi bi-people"></i>
                            <span>
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
                            </span>
                        </div>
                    </h2>
                    <div class="main-btn"> <a href="index.php">Thay đổi tìm kiếm</a> </div>
                </div>

                <div class="flight ps-3">
                    <p class="light-title">Chuyến bay</p>
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

                <div class="container">
                    <?php 
                        $query = "SELECT * FROM list_flight Where Departure_Plane = '$location1' and To_Plane = '$location2' and Start_Date = '$day'";
                    ?>




                    
                    <div class="row ticket mt-4">
                        <input type="text" style="display: none;">
                        <div class="col-md-6 col-lg-3 mb-2 ">
                            <div class="ticket-logo">
                                <img src="assets/img/lg1.png" alt="">
                                <div class="ticket-title">
                                    <h6 name="ticket-title">Bamboo Airways</h6>
                                    <span class="gray">Phổ thông</span>
                                    <p class="gray">(ECONOMYSAVER)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-2">
                            <div class="ticket-logo">
                                <h6 class="ticket-logoID ps-5">QH2181</h6>
                                <div class="time pe-4">
                                    <span class="gray">19/12/2021</span>
                                    <h5 class=>13:20</h5>
                                    <h6>Cần Thơ (VCA)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-2">
                            <div class="ticket-logo">
                                <div class="ticket-icon ms-3">
                                    <p>55 phút</p>
                                    <i class="fa fa-plane" style="font-size: 20px; color: rgb(250, 186, 49)"></i>
                                    <p>Bay thẳng</p>
                                </div>
                                <div class="time me-4">
                                    <span class="gray">19/12/2021</span>
                                    <h5>13:20</h5>
                                    <h6>Cần Thơ (VCA)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-2">
                            <div class="ticket-logo">
                                <p class="ms-3' detail">Chi tiết</p>
                                <div class="ticket-price">
                                    <h5 class="red">622.000 ₫</h5>
                                    <a href="information.php"> <div class="btn-bookT btn-choose">Chọn</div></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row details-wrap pt-2 mb-3">
                        <div class="details mt-3">
                            <div class="detail-left">
                                <h5 class="ms-3 mb-3 detail-title">Chi tiết chuyến bay</h5>
                                <div class="ticket-logo-left">
                                    <img src="assets/img/lg1.png" alt="">
                                    <div class="ticket-title-left">
                                        <h6>Bamboo Airways<span class="ms-3">QH2181</span></h6>
                                        <span class="gray ticket-text">Hạng vé: ECONOMYSAVER | Airbus 321</span>
                                    </div>
                                </div>
                                <div class="detail-adress">
                                    <i class="fa fa-plane primary p-3"></i>
                                    <div class="detail-time ms-3 me-4">
                                        <h6>13:20</h6>
                                        <span class="gray ticket-tex">26/12/2021</span>
                                    </div>
                                    <div class="detail-location">
                                        <h6 class="detail-location-title">Cần Thơ (VCA)</h6>
                                        <span class="gray ticket-text">Sân bay Trà Nóc</span>
                                    </div>
                                </div>
                                <div class="detail-line">
                                    <span class="gray ticket-text">55 phút</span>
                                </div>
                                <div class="detail-adress">
                                    <i class="fa fa-plane primary p-3"></i>
                                    <div class="detail-time ms-3 me-4">
                                        <h6>13:20</h6>
                                        <span class="gray ticket-tex">26/12/2021</span>
                                    </div>
                                    <div class="detail-location">
                                        <h6 class="detail-location-title">Cần Thơ (VCA)</h6>
                                        <span class="gray ticket-text">Sân bay Trà Nóc</span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="detail-right">
                                <h5 class="mb-3 detail-title">Chi tiết giá vé</h5>
                                <div class="ticket-right">
                                    <div class="ticket-title-right">
                                        <h6>Hành khách</h6>
                                        <span class="gray ticket-text">Người lớn</span>
                                    </div>
                                    <div class="ticket-title-right">
                                        <h6>Số lượng</h6>
                                        <span class="gray ticket-text">2</span>
                                    </div>
                                    <div class="ticket-title-right">
                                        <h6>Giá mỗi vé</h6>
                                        <h6 class="primary ticket-text">49.000 ₫	</h6>
                                    </div>
                                    <div class="ticket-title-right">
                                        <h6>Thuế & phí</h6>
                                        <h6 class="primary ticket-text">573.000 ₫</h6>
                                    </div>
                                    <div class="ticket-title-right">
                                        <h6>Tổng cộng</h6>
                                        <h6 class="primary ticket-text">1.244.000 ₫</h6>
                                    </div>
                                </div>
                                <div class="ticket-price">
                                    <h6>Tổng tiền: <span class="red">1.244.000 ₫</span></h6>
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
                    <!-- <?php
                        // echo '<style>';
                        // echo '.123{}';
                        // echo '</style>';
                    ?>
                        <?php
                            // echo '<script>';
                            // echo "detailsWrap = document.querySelector('#123')";
                            // echo "detail = document.querySelector('.detail')";
                            // echo 'detail.onclick = function() {';
                            // echo "detailsWrap.classList.toggle('details-wrap-active')";
                            // echo '};';
                            // echo '</script>';
                        ?> -->
                    


                    <!-- <div class="row">
                        <div class="detail-totalprice">
                            <div class="detail-totalprice-left">
                                <h5>Tổng tiền:</h5>
                                <h5 class="red ms-3 me-3 price1">0 ₫</h5>
                                <div class="ticket-text gray">(Giá đã bao gồm thuế và phí)</div>
                            </div>
                            <div class="detail-totalprice-right">
                                <div class="ticket-text gray">Đã chọn</div>
                                <h5 class="red me-2 ms-2 quantily">0/1</h5>
                                <div>chuyến bay</div>
                                <div class="btn-bookT ms-3 btn-disabled disabled"> <a href="information.php">Đặt vé</a> </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

<script type="text/javascript">

    // btnSelect = function() {
    //     price1 = document.querySelector('.price1')
    //     btnChoose = document.querySelector('.btn-choose')
    //     remove = document.querySelector('.remove')
    //     btnRemove = document.querySelector('.btn-remove')
    //     quantily = document.querySelector('.quantily')
    //     btnDisabled = document.querySelector('.btn-disabled')

    //     btnChoose.addEventListener('click', function() {
    //         btnChoose.classList.add('remove')
    //         btnRemove.classList.remove('remove')
    //         price1.textContent = ' 1.244.000 ₫';
    //         quantily.textContent = '1/1';
    //         btnDisabled.classList.remove('disabled');
    //     })

    //     btnRemove.addEventListener('click', function() {
    //         btnRemove.classList.add('remove')
    //         btnChoose.classList.remove('remove')
    //         price1.textContent = '0 ₫';
    //         quantily.textContent = '0/1';
    //         btnDisabled.classList.add('disabled');
    //     })
    // }

    

    

    // $(document).ready(function() {
    //     $('.ticket').each(function() {
    //         var btnRemove = $(this).querySelector('.btn-remove')
    //         var btnChoose =  $(this).querySelector('.btnChoose');
    //         btnChoose.addEventListener('click', function() {
    //         btnChoose.classList.add('remove')
    //         btnRemove.classList.remove('remove')
    //         // price1.textContent = ' 1.244.000 ₫';
    //         // quantily.textContent = '1/1';
    //         // btnDisabled.classList.remove('disabled');
    //         })

    //         btnRemove.addEventListener('click', function() {
    //         btnRemove.classList.add('remove')
    //         btnChoose.classList.remove('remove')
    //         // price1.textContent = '0 ₫';
    //         // quantily.textContent = '0/1';
    //         // btnDisabled.classList.add('disabled');
    //         })
    //     })
    // })

    var details = document.querySelector('.detail');
    var detailWrap = document.querySelector('.details-wrap');

    details.forEach((detailC, index) => {
        const detailWraps = detailWrap[index];

        detailC.onclick = function () {
        document.querySelector(".detail.details-wrap-active").classList.remove("details-wrap-active");
        document.querySelector(".details-wrap.details-wrap-active").classList.remove("details-wrap-active");

        this.classList.add("details-wrap-active");
        pane.classList.add("details-wrap-active");
    };
});
    
    // detail.onclick = function() {
    //     detailsWrap.classList.toggle('details-wrap-active')
    // }

</script>

<?php include('footer.php') ?>
