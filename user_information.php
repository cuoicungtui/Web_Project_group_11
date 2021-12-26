<?php
session_start();
if (!isset($_SESSION['USER'])) {
    header("location:login.php");
}
?>
<?php
    require_once "admin/connect.php";
        $id = $_SESSION['USER'];
        $query = "SELECT * FROM user_login WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
?>
<?php include('header.php') ?>
<div class="container " style="margin-top: var(--header-mg);">
    <div class="row">
        <div class="col-md-12 mt-2 mb-4">
            <div class="manager-header">
                <h1 style="font-size: 3rem; text-align:center;">Thông Tin Khách Hàng</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="assets/img/user_icon.png" width="50%" height="auto" alt="">
            <h5 class="ms-5 mt-2">
                <?php
                    echo $data['firstname'];
                    echo ' ';
                    echo $data['lastname'];
                ?>
            </h5>
        </div>
        <form class="col-8">
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="<?php echo $data['email'] ?>" readonly>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Tài Khoản</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Họ Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-4">
                <label for="" class="col-sm-2 col-form-label">Giới Tính</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="2">
                    <label class="form-check-label" for="inlineRadio3">Khác</label>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Avatar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="mb-5">
                <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="btn btn-primary" type="button">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php include('footer.php') ?>