<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>


<?php
include "header_admin.php";
?>
<div class="container" style="margin-top: 5%;">
    <h1 class="mt-3 text-center">Customer</h1>
    <a class="btn btn-primary mb-5 bt-3" href="customer_add_admin.php" role="button">Add Customer</a>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">SDT</th>
                <th scope="col" class="text-center">EMAIL</th>
                <th scope="col" class="text-center">Code_Flight</th>                            
                <th scope="col" class="text-center">Type_Chair </th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            include "connect.php";
            $query = "SELECT * FROM list_customer";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data['Id']  ?></th>
                    <td><?php echo $data['Name']  ?></td>
                    <td><?php echo $data['SDT']  ?></td>
                    <td ><?php echo $data['EMAIL']  ?></td>
                    <td ><?php echo $data['Code_Flight']  ?></td>
                    <td ><?php echo $data['Type_Chair']  ?></td>               
                    <td class="text-center"><a href="#"></i> </a></td>
                    <td class="text-center"><a href="customer_delete_admin.php?Id=<?php echo $data['Id'] ?>"><i class="bi bi-trash"></i></a></td>
                    
                </tr>

            <?php
            }
            ?>



        </tbody>
    </table>
</div>


<?php
include "footer.php";
?>