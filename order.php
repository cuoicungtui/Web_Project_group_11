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
                <div class="tab-item">Vé đang chờ xử lý</div>
            </div>
        </div>
        <div class="tab-content ">
            <div class="tab-panel text-center ">
                <img src="assets/img/noflight.png" alt="">
                <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                <a href="index.php" class="btn-bookT" style="text-decoration: none;">Tìm kiếm & Đặt vé ngay</a>
            </div>
        </div>



    </div>
</div>


</div>
</div>

<script>
    var tabText = document.querySelector('.tab-item')
    var tabImg = document.querySelector('.tab-img')
    tabText.addEventListener('click', function() {
        alert('deo co')
    })
</script>
<?php include('footer.php') ?>