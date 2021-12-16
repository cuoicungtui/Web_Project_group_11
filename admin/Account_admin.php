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
    <div class="container">
        <a class="btn btn-primary mt-5" href="add_admin.php" role="button">Add admin</a>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">UseName</th>
                    <th scope="col">Password</th>
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
                        <td> <?php echo $row['UseName'] ?></td>
                        <td> <?php echo $row['PASSWORD'] ?></td>
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