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

<?php
include "header_admin.php";
?>

<div class="container " style="margin-top: 5%;">
    <h3 class="text-center mt-3">Add Customer</h3>

    <Form action="customer_add_admin_DB.php" method="Post">
        <div class="mb-3">
            <label for="Id" class="form-label">Id</label>
            <input type="number" class="form-control" id="Id" name="Id" placeholder="Id" required>
        </div>
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Namee" name="Name" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="SDT" class="form-label">SDT</label>
            <input type="text" class="form-control" id="SDT" name="SDT" placeholder="SDT" required>
        </div>
        <div class="mb-3">
            <label for="EMAIL" class="form-label">EMAIL</label>
            <input type="text" class="form-control" id="EMAIL" name="EMAIL" placeholder="EMAIL" required>
        </div>
        <div class="mb-3">
            <label for="Code_Flight" class="form-label">Code_Flight</label>
            <input type="text" class="form-control" id="Code_Flight" name="Code_Flight" placeholder="Code_Flight" required>
        </div>
        <div class="mb-3">
            <label for="Type_Chair" class="form-label">Type_Chair</label>
            <!-- <input type="text" class="form-control" id="Type_Chair" name="Type_Chair" placeholder="Type_Chairt" required> -->
            <select class="col-12" name="Type_Chair" id="Type_Chair" style="height: 32px;">
                <option value="L1">L1</option>
                <option value="L2">L2</option>
            </select>
        </div>
        <div class="mb-3 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>  

    </Form>
    
    
</div>

<?php
include "footer.php";
?>