<?php 
    session_start();
    if(!isset($_SESSION['USER'])){
        header('index.php');
        return;
    }
    $id = $_SESSION['USER'];
?>
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
        <div class="tab-content">
        <div class="tab-img text-center ">
            
            <?php
            require 'admin/connect.php';
            $query = "SELECT * FROM list_customer,list_flight,user_login,list_planes Where list_flight.Code_Flight = list_customer.Code_Flight and user_login.id=list_customer.id_user and list_flight.Code_Plane=list_planes.Code_Plane and status = 1 and user_login.id=$id ";
            $result = mysqli_query($conn, $query);
            // $row = mysqli_fetch_assoc($result);
            // $rowcount=mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

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

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                <?php
                }
            } else {
                ?>
                <img src="assets/img/noflight.png" alt="">
                <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                <a href="index.php" class="btn-bookT" style="text-decoration: none;">Tìm kiếm & Đặt vé ngay</a>
            <?php
            }
            ?>

        </div>
        </div>
        <div class="tab-content1 hiden">
            <div class="tab-img text-center ">
            
                <?php
                require 'admin/connect.php';
                $query = "SELECT * FROM list_customer,list_flight,user_login,list_planes Where list_flight.Code_Flight = list_customer.Code_Flight and user_login.id=list_customer.id_user and list_flight.Code_Plane=list_planes.Code_Plane and status = 0 and user_login.id=$id";
                $result = mysqli_query($conn, $query);
                // $row = mysqli_fetch_assoc($result);
                // $rowcount=mysqli_num_rows($result);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

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

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                    <?php
                    }
                } else {
                    ?>
                    <img src="assets/img/noflight.png" alt="">
                    <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                    <a href="index.php" class="btn-bookT" style="text-decoration: none;">Tìm kiếm & Đặt vé ngay</a>
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