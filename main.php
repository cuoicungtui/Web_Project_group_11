<div id="main">
        <div class="container">
            <div class="row">
                <div class="main-top mt-3">
                    <h2 class="main-title">Tìm kiếm chuyến bay cho hành trình của bạn!</h2>
                    <div class="main-btn">Tra cứu đặt chỗ</div>
                </div>
                <div class="booking mb-3">
                    <div class="booking-title">
                        <h5>Tra cứu đặt chỗ</h5>
                        <i class="bi bi-x-lg booking-close"></i>
                    </div>
                    <input type="text" class="booking-input" placeholder="Mã đặt chỗ">
                    <p class="booking-text">Nhập mã đặt chỗ để tra cứu thông tin chuyến bay của bạn</p>
                    <div class="btn-bookT">Tìm kiếm</div>
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
                        <form class="tab-pane active" method="post" onsubmit="return check_searchOne()" action="ticket1.php">
                            <div class="container">
                                <div class="row">
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <select class="form-select form1-select1" id="cardtype" aria-label="Default select example" name="form1-select1">
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Điện Biên Phủ">Điện Biên Phủ</option>
                                            <option value="Hài Phòng">Hài Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                            <option value="Đà Lạt">Đà Lạt</option>
                                            <option value="Phú Quốc">Phú Quốc</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Pleiku">Pleiku</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Côn Đảo">Côn Đảo</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Vinh">Vinh</option>
                                            <option value="Huế">Huế</option>
                                        </select>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm đến</span>
                                        <select class="form-select form1-select2" id="cardtype" aria-label="Default select example" name="form1-select2">
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Điện Biên Phủ">Điện Biên Phủ</option>
                                            <option value="Hài Phòng">Hài Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                            <option value="Đà Lạt">Đà Lạt</option>
                                            <option value="Phú Quốc">Phú Quốc</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Pleiku">Pleiku</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Côn Đảo">Côn Đảo</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Vinh">Vinh</option>
                                            <option value="Huế">Huế</option>
                                        </select>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Ngày đi</span>
                                        <br>
                                        <input type="date" name="day1" class="day1" required>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3 d-flex">
                                        <div class="info-name d-flex">
                                            <div class="input-bookTicket col-md-4">
                                                <span>Người lớn</span>
                                                <br>
                                                <input class="adult1" min="1" max="5" style="width: 80px;" type="number" name="adult1" required>
                                            </div>
                                            <div class="input-bookTicket col-md-4">
                                                <span>Trẻ Em</span>
                                                <br>
                                                <input class="children1" min="0" max="3" style="width: 80px;" type="number" name="children1">
                                            </div>
                                            <div class="input-bookTicket col-md-4">
                                                <span>Em bé</span>
                                                <br>
                                                <input class="baby1" min="0" max="2" style="width: 80px;" type="number" name="baby1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-search">
                                    <button class="btn-bookT" name="btn1" type="submit" style="color: #fff; text-decoration: none;">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                        <form class="tab-pane" method="post" onsubmit="return check_searchTwo()" action="ticket2.php">
                            <div class="container">
                            <div class="row">
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm khởi hành</span>
                                        <select class="form-select form2-select1" id="cardtype" aria-label="Default select example" name="form2-select1">
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Điện Biên Phủ">Điện Biên Phủ</option>
                                            <option value="Hài Phòng">Hài Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                            <option value="Đà Lạt">Đà Lạt</option>
                                            <option value="Phú Quốc">Phú Quốc</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Pleiku">Pleiku</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Côn Đảo">Côn Đảo</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Vinh">Vinh</option>
                                            <option value="Huế">Huế</option>
                                        </select>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <span>Điểm đến</span>
                                        <select class="form-select form2-select2" id="cardtype" aria-label="Default select example" name="form2-select2">
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Điện Biên Phủ">Điện Biên Phủ</option>
                                            <option value="Hài Phòng">Hài Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                            <option value="Đà Lạt">Đà Lạt</option>
                                            <option value="Phú Quốc">Phú Quốc</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Pleiku">Pleiku</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Côn Đảo">Côn Đảo</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Vinh">Vinh</option>
                                            <option value="Huế">Huế</option>
                                        </select>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3">
                                        <div class="info-name d-flex">
                                            <div class="input-bookTicket col-md-6">
                                                <span>Ngày đi</span>
                                                <br>
                                                <input class="day2" name="day3" type="date" required>
                                            </div>
                                            <div class="input-bookTicket col-md-6">
                                                <span>Ngày về</span>
                                                <br>
                                                <input class="day3" name="day4" type="date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-bookTicket col-12 col-xl-3 col-sm-6 mb-3 d-flex">
                                        <div class="info-name d-flex">
                                            <div class="input-bookTicket col-md-4">
                                                <span>Người lớn</span>
                                                <br>
                                                <input class="adult2"  min="1" max="5" style="width: 80px;" type="number" name="adult2" required>
                                            </div>
                                            <div class="input-bookTicket col-md-4">
                                                <span>Trẻ Em</span>
                                                <br>
                                                <input class="children2" min="0" max="3" style="width: 80px;" type="number" name="children2">
                                            </div>
                                            <div class="input-bookTicket col-md-4">
                                                <span>Em bé</span>
                                                <br>
                                                <input class="baby2" min="0" max="2" style="width: 80px;" type="number" name="baby2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-search">
                                    <button type="submit" name="btn2" class="btn-bookT" style="color: #fff; text-decoration: none;">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                        <form class="tab-pane" action="ticket2.php">
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
                                <div class="tab-search mt-3">
                                    <button type="submit" name="btn3" class="btn-bookT" style="color: #fff; text-decoration: none;">Tìm kiếm</button>
                                </div>
                            </div>
                        </fo>
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


            <script>
                function check_searchOne() {
                    var form1Select1 = document.querySelector(".form1-select1")
                    var form1Select2 = document.querySelector(".form1-select2")
                    var day1 = document.querySelector(".day1")
                    var adult1 = document.querySelector(".adult1")
                    var children1 = document.querySelector(".children1")
                    var baby1 = document.querySelector(".baby1")
                    var startD = new Date(day1.value)
                    var nowD = new Date();
                    if(form1Select1.value == form1Select2.value) {
                        alert('Điểm khởi hành phải khác điểm đến')
                        form1Select1.style.borderColor = "red"; 
                        form1Select2.style.borderColor = "red"; 
                        return false;
                    }
                    if(Number(adult1.value) < Number(baby1.value)) {
                        alert('Số lượng người lớn phải lớn hơn hoặc bằng em bé!');
                        adult1.style.borderColor = "red";
                        baby1.style.borderColor = "red";
                        return false;
                    }
                    if(startD.getTime() < nowD.getTime()) {
                        alert('Ngày đặt vé phải lớn hơn ngày hiện tại');
                        day1.style.borderColor = "red";
                        return false;
                    }
                }
                function check_searchTwo() {
                    var form2Select1 = document.querySelector(".form2-select1")
                    var form2Select2 = document.querySelector(".form2-select2")
                    var day2 = document.querySelector(".day2")
                    var day3 = document.querySelector(".day3")
                    var adult2 = document.querySelector(".adult2")
                    var children2 = document.querySelector(".children2")
                    var baby2 = document.querySelector(".baby2")
                    var startD = new Date(day2.value)
                    var endD = new Date(day3.value)
                    var nowD = new Date();
                    if(Number(adult2.value) < Number(baby2.value)) {
                        alert('Số lượng người lớn phải lớn hơn hoặc bằng em bé!');
                        adult2.style.borderColor = "red";
                        baby2.style.borderColor = "red";
                        return false;
                    }
                    if(startD.getTime() < nowD.getTime() || endD.getTime() < startD.getTime()) {
                        alert('Ngày đặt vé phải lớn hơn ngày hiện tại')
                        day.style.borderColor = "red"; 
                        return false;
                    }
                    if(form2Select1.value == form2Select2.value) {
                        alert('Điểm khởi hành phải khác điểm đến')
                        form2Select1.style.borderColor = "red"; 
                        form2Select2.style.borderColor = "red"; 
                        return false;
                    }

                }
            </script>