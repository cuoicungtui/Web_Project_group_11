    <?php include('./header.php') ?>

    <div id="main">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="main-top">
                        <h2 class="main-title">Tìm kiếm chuyến bay cho hành trình của bạn!</h2>
                        <div class="main-btn">Tra cứu đặt chỗ</div>
                    </div>
                </div>
            </div>

            <div class="body-book-ticket">
                <div class="book-ticket">
                    <div class="tabs">
                        <div class="tab-item active">
                            Một chiều
                        </div>
                        <div class="tab-item">
                            Khứ hồi
                        </div>
                        <div class="tab-item">
                            Nhiều chặng
                        </div>
                        <div class="line"></div>
                    </div>
    
                    <!-- Tab content -->
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="container">
                                <div class="row">
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <input type="text" value="Đà Nẵng (DAD)">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm đến</span>
                                        <input type="text" value="Phú Quốc (PQC)">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Ngày đi</span>
                                        <input type="text" value="09/12/2021">
                                        <i class="input-bookTicket-icon fa fa-calendar"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Số hành khách</span>
                                        <input type="text" value="2 người lớn, 0 trẻ em">
                                        <i class="input-bookTicket-icon fa fa-user-plus"></i>
                                        <i class="input-bookTicket-iconR fa fa-question-circle"></i>
                                    </div>
                                </div>
                                <div class="tab-search">
                                    <div class="search-checkbox d-flex">
                                        <input type="checkbox" class="checkbox">
                                        <p>Tìm kiếm vé rẻ trong tháng</p>
                                    </div>
                                    <div class="btn-bookT">Tìm kiếm</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane">
                            <div class="container">
                                <div class="row">
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <input type="text" placeholder="Nhập địa điểm">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm đến</span>
                                        <input type="text" placeholder="Nhập địa điểm">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Ngày đi</span>
                                        <input type="text" value="08/12/2021 - 09/12/2021">
                                        <i class="input-bookTicket-icon fa fa-calendar"></i>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Số hành khách</span>
                                        <input type="text" value="1 người lớn, 0 trẻ em">
                                        <i class="input-bookTicket-icon fa fa-user-plus"></i>
                                        <i class="input-bookTicket-iconR fa fa-question-circle"></i>
                                    </div>
                                </div>
                                <div class="tab-search">
                                    <div class="search-checkbox d-flex">
                                        <input type="checkbox" class="checkbox">
                                        <p>Tìm kiếm vé rẻ trong tháng</p>
                                    </div>
                                    <div class="btn-bookT">Tìm kiếm</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane">
                            <div class="container">
                                <div class="row">
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <input type="text" value="Hà Nội (HAN)">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Điểm đến</span>
                                        <input type="text" value="Phú Quốc (PQC)">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Ngày đi</span>
                                        <input type="text" value="09/12/2021">
                                        <i class="input-bookTicket-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <input type="text" placeholder="Nhập địa điểm">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Điểm đến</span>
                                        <input type="text" placeholder="Nhập địa điểm">
                                        <i class="input-bookTicket-icon fa fa-plane"></i>
                                    </div>
                                    <div class="input-bookTicket col-sm-6 col-12 col-xl-4 mb-3">
                                        <span>Ngày đi</span>
                                        <input type="text" value="09/12/2021">
                                        <i class="input-bookTicket-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="tab-control mt-5">
                                    <div class="btn-control-wrap col-lg-6 col-sm-12 col-12">
                                        <div class="btn-plus me-5">
                                            <i class="fa fa-plus"></i>
                                            <p>Thêm chuyến bay</p> 
                                        </div>
                                        <div class="btn-repair">
                                            <i class="bi bi-arrow-repeat"></i>
                                            <p>Thiết lặp lại</p>
                                        </div>
                                    </div>
                                    <div class="tab-controlR col-lg-6 col-sm-12 col-12">
                                        <div class="input-bookTicket">
                                            <span>Số hành khách</span>
                                            <input type="text" value="1 người lớn, 0 trẻ em">
                                            <i class="input-bookTicket-icon fa fa-user-plus"></i>
                                            <i class="input-bookTicket-iconR fa fa-question-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-bookNC mt-3">
                                    <p class="btn-bookT text-center">Tìm kiếm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Help -->
                    <div class="container help mt-4">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6 col-sm-12">
                                <div class="help-avatar">
                                    <img src="./assets/img/help.svg" alt="" class="help-avatar-img">
                                    <div class="help-title">
                                        <div class="help-text">Tổng đài CSKH</div>
                                        <div class="help-sdt">1900571248</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-sm-12">
                                <div class="help-avatar">
                                    <div class="help-title straight-line">
                                        <p class="help-text">Tài khoản trung tâm Chăm sóc khách hàng</p>
                                        <p class="help-sdt">https://www.hahalolo.com/u/chamsockhachhang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="row mb-4">
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p1.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG</h4>
                                <p class="card-text">Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p2.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">HÀ NỘI ĐIỀU CHỈNH QUY ĐỊNH KIỂM SOÁT DỊCH ĐỐI VỚI NGƯỜI VỀ TỪ ĐỊA PHƯƠNG KHÁC</h4>
                                <p class="card-text">Ngày 18/11/2021, Ủy ban Nhân dân thành phố Hà Nội đã triển khai công điện hoả tốc số 24-CĐ/UBND, điều chỉnh một số yêu cầu kiểm soát dịch đối với người đến/về Hà Nội từ địa phương khác.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p3.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETJET KHÔI PHỤC 48 ĐƯỜNG BAY NỘI ĐỊA ĐÓN KHÁCH TRÊN NHỮNG CHUYẾN BAY XANH</h4>
                                <p class="card-text">Từ 21/10, Vietjet sẽ khôi phục khai thác toàn bộ các đường bay kết nối TP. HCM với Hà Nội, Đà Nẵng và các tỉnh, thành phố trên cả nước, đáp ứng nhu cầu di chuyển an toàn, nhanh chóng của người dân. Đến 30/11/2021, mạng bay của Vietjet sẽ mở lại với 48 đường bay, phục vụ hành khách bay khắp Việt Nam.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p4.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">HƯỚNG DẪN BAY AN TOÀN DÀNH CHO KHÁCH BAY NỘI ĐỊA</h4>
                                <p class="card-text"> Theo Công văn số 11244/BGTVT-CYT của Bộ Giao thông Vận tải, các hành khách khi đi bay sẽ không phải thực hiện việc kê khai thông tin bằng Bản cam kết phòng chống dịch Covid-19 (bản cứng) từ 12h00 ngày 26/10/2010.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p5.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">BAMBOO AIRWAYS CÓ TỚI HƠN 50 ĐƯỜNG BAY ĐỂ BẠN THOẢI MÁI CHINH PHỤC</h4>
                                <p class="card-text">Tháng 11 sắp đến, bạn cứ mạnh dạn chọn những điểm đến mình thích đi. Bamboo Airways có tới hơn 50 đường bay để bạn thoả sức đến những nơi mình thích, thăm những nơi mình nhớ và ở thật lâu những nơi mình yêu nhé.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p6.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p7.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p8.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p9.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p10.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p11.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <img src="./assets/img/p12.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">VIETNAM AIRLINES GROUP KHÔI PHỤC ĐƯỜNG BAY NỘI ĐỊA TỪ 21/10/2021 - 30/11/2021</h4>
                                <p class="card-text">Trước tình hình nhiều địa phương nới lỏng biện pháp hạn chế đi lại, nhằm đáp ứng nhu cầu hành khách, Vietnam Airlines Group gồm Vietnam Airlines, Pacific Airlines và VASCO nỗ lực khôi phục gần như hoàn toàn mạng bay nội địa sau ngày 20/10/2021. Các hãng sẽ chính thức mở bán vé rộng rãi dự kiến trong hôm nay ngay sau khi có sự cho phép của cơ quan chức năng.</p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div>
<!-- /////////////////////////////// -->
                     <?php
                        require "admin/connect.php";
                        $query = "SELECT * FROM table_dl";
                        $Data = mysqli_query($conn,$query);
                        $dt = mysqli_fetch_assoc($Data);


                        ?>
                        <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                        <div class="card">
                            <?php
                                echo "<img src=".$dt['img'];
                                echo 'class="card-img-top"alt="">';
                            ?>
                             <!-- <img src="./assets/img/p12.jpg" class="card-img-top" alt=""> -->
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $dt['Title'] ?></h4>
                                <p class="card-text"><?php echo $dt['Prg'] ?></p>
                            </div>
                            <a href="#" class="card-link">Chi tiết</a>
                        </div>
                    </div> 


                        <?php

                    ?> 
                  

                </div>
            </div>

        </div>
    </div>

    <div class="btn-load">
        <div class="btn-bookT">Xem thêm</div>
    </div>
    


<?php include('./footer.php') ?>