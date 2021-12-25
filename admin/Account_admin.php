<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
include "header_admin.php";
?>

<body>
   
    <div class="container " style="margin-top: 5%;">
        <h1 class="title mt-5 mb-5 text-center">Manage Users</h1>


           <div class="row">
           <div class="col-6">
              <a class="btn btn-primary" href="add_admin.php?add" role="button">Add admin</a>
            </div>
          

            <div class="form-group pull-right col-6 ">
                <input type="text" class="search form-control" placeholder="What you looking for?">
            </div>
        
           </div>
        

        <table class="table mt-2 table-hover table-bordered results">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">UseName</th>
                    <th scope="col" class="text-center">Password</th>
                    <th scope="col" class="text-center">Change Password</th>
                    <th scope="col" class="text-center">Delete Admin</th>
                </tr>
                <tr class="warning no-result">
                    <td colspan="5"><i class="fa fa-warning"></i> No result</td>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">4</th>
                    <td>5</td>
                    <td> 6 </td>
                </tr> -->
                
                <?php
                require "connect.php";
                $query = "SELECT * FROM admin";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0)
                    while ($row =  mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $row['Id'] ?> </th>
                        <td class="text-center"> <?php echo $row['UseName'] ?></td>
                        <td class="text-center"> <?php echo $row['PASSWORD'] ?></td>
                        <td class="text-center"> <a href="edit_admin.php?id=<?php echo $row['Id']  ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-center"> <a href="delete_admin_DB.php?id=<?php echo $row['Id']  ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }

                ?>

            </tbody>
        </table>
    </div>

       
</body>

<?php
include "footer.php";
?>