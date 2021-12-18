<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
    if(!isset($_GET['add_news'])){
        header("location:Home.php");
    }
?>

<?php
include "header_admin.php";
?>

<div class="container mb-5">
    <h3 class="text-center mt-3">Add News</h3>

    <Form action="News_add_DB.php" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" placeholder="Title">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <img src="../assets/img/p6.jpg" class="img-thumbnail" alt="...">
                </div>
                <div class="col-6">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img" accept="image/png, image/jpeg">
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="6"></textarea>
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>
        
        
    </Form>

</div>

<?php
include "footer.php";
?>