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
    <h1 class="mt-3 text-center">Planes</h1>
    <a class="btn btn-primary mb-5 bt-3" href="#" role="button">Add Planes</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">Code_Plane</th>
                <th scope="col" class="text-center">Name_Plane</th>
                <th scope="col" class="text-center">Name_Airline</th>
                <th scope="col" class="text-center">L1_Chair</th>
                <th scope="col" class="text-center">L2_Chair</th>                            
                <th scope="col" class="text-center">Change </th>
                <th scope="col" class="text-center">Delete </th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            include "connect.php";
            $query = "SELECT * FROM list_planes";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data['Code_Plane']  ?></th>
                    <td><?php echo $data['Name_Plane']  ?></td>
                    <td><?php echo $data['Name_Airline']  ?></td>
                    <td ><?php echo $data['L1_Chair']  ?></td>
                    <td ><?php echo $data['L2_Chair']  ?></td>              
                    <td class="text-center"><a href="#"><i class="bi bi-pencil-square"></i> </a></td>
                    <td class="text-center"><a href="plane_delete_admin.php?Code_PLane=<?php echo $data['Code_Plane'] ?>"><i class="bi bi-trash"></i></a></td>
                    
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