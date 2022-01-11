<?php include('header.php') ?>
<div class="container " style ="margin-top: var(--header-mg);" >
    <div class="row">
        <div class="col-md-12">
            <div class = "manager-header d-flex justify-content-between">
                <div class ="heading_title">Quản lý đơn hàng</div>
                <div class ="tour d-flex " style = "border: 1px solid #ccc; padding: 10px 50px; border-radius: 30px ">
                    <p style ="margin-bottom: 0px"><i class="fa fa-plane pe-2"></i> Vé máy bay</p>
                </div>
            </div>
            
        </div>
        
        
    </div>
    <div class="row">
    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Vé đã mua</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Vé đang chờ xử lý</a>
  </li>
</ul>
            <div class="tab-content ">
                <div class="tab-img text-center ">
                    <img src="assets/img/noflight.png" alt="">
                    <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                    <a href="index.php" class = "btn-bookT" style="text-decoration: none;">Tìm kiếm &  Đặt vé ngay</a>
                </div>
            </div>
            
        
        </div>
    </div>


</div>
</div>


<?php include('footer.php') ?>