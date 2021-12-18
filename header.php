<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt vé máy bay | Hahalolo</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light header fixed-top">
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

            <ul class="navbar-nav m-auto">
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
                    <a class="nav-link" href="#">
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
                <a class="text-reset me-4" href="#">
                    <i class="bi bi-cart3"></i>
                </a>
                <a class="text-reset me-4" href="#">
                    <i class="bi bi-wallet"></i>
                </a>
                <a class="text-reset me-4" href="#">
                    <i class="bi bi-messenger"></i>
                </a>
                <a class="d-flex align-items-center hidden-arrow" href="#" role="button" aria-expanded="false">
                    <img src="./assets/img/no-avatar.png" class="rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy"/>
                </a>
            </div>

            
        </div>
    </nav>

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