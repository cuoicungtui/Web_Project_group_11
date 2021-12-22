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
$index = $_GET['index'];
require "connect.php";
$query = "SELECT * FROM conten WHERE ID = $ID and index_ = $index";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>
<div class="container mb-5">
    <h3 class="text-center mt-3">Edit News</h3>

    <Form action="News_edit_contenDB.php?id=<?php echo $ID ?>&index=<?php echo $_GET['index']?>" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ID" class="form-label">ID</label>
            <input type="number" class="form-control" id="ID" name="ID" value=<?php echo $_GET['id'] ?> readonly>
        </div>
        <div class="mb-3">
            <label for="index" class="form-label">index</label>
            <input type="number" class="form-control" id="index" name="index" value="<?php echo $_GET['index'] ?>">
        </div>
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $data['h5'] ?>">
        </div>
        
        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="file_img" accept="image/png, image/jpeg">
                </div>
                <div class="col-6">
                    <label for="name_image" class="form-label">Image</label>
                    <input class="form-control" type="title" id="name_image" name="name_image" placeholder="Name image" >
                   
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="6">
            <?php echo $data['p'] ?>
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