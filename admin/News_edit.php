<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
if (!isset($_GET['id'])) {
    header("location:Home.php");
}
?>

<?php
include "header_admin.php";
?>

<?php
$ID = $_GET['id'];
require "connect.php";
$query = "SELECT * FROM dl WHERE ID = $ID";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>
<div class="container mb-5">
    <h3 class="text-center mt-3">Edit News</h3>

    <Form action="News_edit_DB.php?id=<?php echo $ID ?>" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $data['Title'] ?>">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo $data['date'] ?>">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-12">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img" accept="image/png, image/jpeg">
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="6">
            <?php echo $data['Prg'] ?>
            </textarea>
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>


    </Form>

</div>

<?php
include "footer.php";
?>