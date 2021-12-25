<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
    return;
}
?>
<?php
$ID = $_GET['Code_Plane'];
require "connect.php";
$query = "SELECT * FROM list_planes WHERE Code_Plane = '$ID'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<?php
include "header_admin.php";
 ?>

<div class="container mb-5">
    <h3 class="text-center mt-3">Add Plane</h3>

    <Form action="plane_edit_admin_DB.php" method="Post">
        <div class="mb-3">
            <label for="Code_Plane" class="form-label">Code_Plane</label>
            <input readonly type="text" class="form-control" id="Code_Plane" name="Code_Plane" value="<?php echo $data['Code_Plane'] ?>">
        </div>
        <div class="mb-3">
            <label for="Name_Plane" class="form-label">Name_Plane</label>
            <input type="text" class="form-control" id="Name_Plane" name="Name_Plane" value="<?php echo $data['Name_Plane'] ?>">
        </div>
        <div class="mb-3">
            <label for="Name_Airline" class="form-label">Name_Airline</label>
            <input type="text" class="form-control" id="Name_Airline" name="Name_Airline" value="<?php echo $data['Name_Airline'] ?>">
        </div>
        <div class="mb-3">
            <label for="L1_Chair" class="form-label">L1_Chair</label>
            <input type="number" class="form-control" id="L1_Chair" name="L1_Chair" value="<?php echo $data['L1_Chair'] ?>">
        </div>
        <div class="mb-3">
            <label for="L2_Chair" class="form-label">L2_Chair</label>
            <input type="number" class="form-control" id="L2_Chair" name="L2_Chair" value="<?php echo $data['L2_Chair'] ?>">
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>  

    </Form>
    
    
</div>

<?php
include "footer.php";
?>