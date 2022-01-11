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
$result = mysqli_query($conn, $query);
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
            <?php
            if ($data['avatar'] == "") {
                echo '<img src="assets/img/user_icon.png" width="50%" height="auto" alt="" class="rounded-circle">';
            } else {
                echo '<img src="';
                echo $data['avatar'];
                echo '" width="50%" height="auto" alt="" class="rounded-circle">';
            }
            

            ?>
            

            <h5 class="ms-3 mt-2">
                <?php
                echo $data['firstname'];
                echo ' ';
                echo $data['lastname'];
                ?>
            </h5>
        </div>
        <form class="col-8" action="user_db.php" method="Post" enctype="multipart/form-data">
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" value="<?php echo $data['email'] ?>" readonly>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Họ Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value=" <?php echo $data['firstname'] . ' ' . $data['lastname'] ?>" >
                </div>
            </div>
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">SDT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sdt" value="<?php echo $data['sdt'] ?>">
                </div>
            </div>         
            <div class="mb-4 row">
                <label for="" class="col-sm-2 col-form-label">Avatar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="avatar" accept="image/png, image/jpeg">
                </div>
            </div>
            <div class="mb-5">
                <div class="d-grid gap-2 d-md-block mt-4">
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php include('footer.php') ?>