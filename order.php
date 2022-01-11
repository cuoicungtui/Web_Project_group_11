<?php include('header.php') ?>
<div class="container " style="margin-top: var(--header-mg);">
    <div class="row">
        <div class="col-md-12">
            <div class="manager-header d-flex justify-content-between">
                <div class="heading_title">Quản lý đơn hàng</div>
                <div class="tour d-flex " style="border: 1px solid #ccc; padding: 10px 50px; border-radius: 30px ">
                    <p style="margin-bottom: 0px"><i class="fa fa-plane pe-2"></i> Vé máy bay</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="nav nav-pills">
            <div class="tabs">
                <div class="tab-item">Vé đã mua</div>
                <div class="tab-item tab-item1">Vé đang chờ xử lý</div>
            </div>
        </div>
        <div class="tab-content ">
            <div class="tab-panel text-center ">
                <img src="assets/img/noflight.png" alt="">
                <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                <a href="index.php" class="btn-bookT" style="text-decoration: none;">Tìm kiếm & Đặt vé ngay</a>
            </div>
        </div>
        <div class="tab-content1 hiden">
            <div class="tab-panel text-center ">
            <?php 
                    require 'admin/connect.php';
                        $query = "SELECT * FROM list_customer, user_login,list_flight Where list_customer.id_user = user_login.id_user and list_flight.Code_Flight=list_customer.Code_Flight and status = 0";
                        $result = mysqli_query($conn,$query);
                        // $row = mysqli_fetch_assoc($result);
                        // $rowcount=mysqli_num_rows($result);
                       

                        while($row = mysqli_fetch_assoc($result)){
                           
                        
                            
                            ?>
                                <div class="containerC">
                                    <div class="row ticket mt-4">
                                        <input type="text" style="display: none;">
                                        <div class="col-md-6 col-lg-3 mb-2 ">
                                            <div class="ticket-logo">
                                                <?php 
                                                    // echo '<img src="';
                                                    // echo $row['img'];
                                                    // echo '" alt="">';
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
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row details-wrap pt-2 mb-3">
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

                                    </div> -->

                                </div>

                                <!-- <div class="containerC">
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

                                      
                                    </div>

                                </div> -->
                            <?php
                        }
                        

                    ?>
            </div>
        </div>
        <style>
            .hiden {
                display: none;
            }
        </style>




    </div>
</div>


</div>
</div>

<script>
    var tabText = document.querySelector('.tab-item')
    var tabContent = document.querySelector('.tab-content')
    var tabText1 = document.querySelector('.tab-item1')
    var tabContent1 = document.querySelector('.tab-content1')
    tabText.addEventListener('click', function() {
        tabContent.classList.add('hiden')
        tabContent1.classList.remove('hiden')
    })

    tabText1.addEventListener('click', function() {
        tabContent.classList.remove('hiden')
        tabContent1.classList.add('hiden')
    })
</script>
</body>

</html>