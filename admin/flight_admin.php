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
    <h1 class="mt-3 text-center">Flight</h1>
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary mb-5 bt-3" href="flight_add.php" role="button">Add flight</a>
        </div>
        <div class="form-group pull-right col-6 ">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
    </div>



    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col" class="text-center">Code_Flight</th>
                <th scope="col" class="text-center">Code_Plane</th>
                <th scope="col" class="text-center">Start_Date</th>
                <th scope="col" class="text-center">End_Date</th>
                <th scope="col" class="text-center">Start_Time</th>
                <th scope="col" class="text-center">End_Time</th>
                <th scope="col" class="text-center">Departure_Plane</th>
                <th scope="col" class="text-center">To_Plane</th>
                <th scope="col" class="text-center">Price_L1</th>
                <th scope="col" class="text-center">Price_L2</th>
                <th scope="col" class="text-center">Change </th>
                <th scope="col" class="text-center">Delete </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connect.php";
            $query = "SELECT * FROM list_flight";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data['Code_Flight']  ?></th>
                    <td><?php echo $data['Code_Plane']  ?></td>
                    <td><?php echo $data['Start_Date']  ?></td>
                    <td><?php echo $data['End_Date']  ?></td>
                    <td><?php echo $data['Start_Time']  ?></td>
                    <td><?php echo $data['End_Time']  ?></td>
                    <td><?php echo $data['Departure_Plane']  ?></td>
                    <td><?php echo $data['To_Plane']  ?></td>
                    <td><?php echo $data['Price_L1']  ?></td>
                    <td><?php echo $data['Price_L2']  ?></td>

                    <td class="text-center"><a href="flight_edit.php?Code_Flight=<?php echo $data['Code_Flight'] ?>"><i class="bi bi-pencil-square"></i> </a></td>
                    <td class="text-center"><a href="flight_delete.php?Code_Flight=<?php echo $data['Code_Flight']  ?>"><i class="bi bi-trash"></i></a></td>

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