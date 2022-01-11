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
        <div class="tab-Content">
            <div class="tab-img text-center ">
                <img src="assets/img/noflight.png" alt="">
                <p class="tab-text mt-3 mb-5">Hiện tại bạn chưa có đơn hàng vé máy bay nào.</p>
                <a href="index.php" class="btn-bookT" style="text-decoration: none;">Tìm kiếm & Đặt vé ngay</a>
            </div>
        </div>
        <div class="tab-content1 hiden">
            <div class="tab-panel text-center ">
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