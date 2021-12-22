<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
    return;
}
?>


<?php
include "header_admin.php";
?>

<div class="container mb-5">
    <h3 class="text-center mt-3">Add Conten</h3>

    <Form action="News_add_contenDB.php" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ID" class="form-label">ID</label>
            <input type="number" class="form-control" id="ID" name="ID" value=<?php echo $_GET['add_conten'] ?> readonly>
        </div>
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" placeholder="Title" >
        </div>
        <div class="mb-3">
            <label for="index" class="form-label">index</label>
            <input type="number" class="form-control" id="index" name="index"  >
        </div>
        <div class="mb-3">
            <div class="row">
            
                <div class="col-12">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img" accept="image/png, image/jpeg" >
                   
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