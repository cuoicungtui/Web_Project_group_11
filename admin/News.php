<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
}
?>

<?php
include "header_admin.php";
?>
<div class="container">
    <h1 class="mt-3 text-center">News</h1>
    <a class="btn btn-primary mb-5 bt-3" href="News_add.php?add_news" role="button">Add News</a>
    <table class="table">
        <thead>
            <tr>

                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Paragraph</th>
                <th scope="col" class="text-center">Change </th>
                <th scope="col" class="text-center">Delete </th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "connect.php";
            $query = "SELECT * FROM dl";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data['ID']  ?></th>
                    <td class="text-center"><img src=".<?php echo $data['img'] ?>" class="img-thumbnail" alt="..." width="75px" height="75px"></td>
                    <td><?php echo $data['Title']  ?></td>
                    <td style=" width: 60%;}"><?php echo $data['Prg']  ?></td>
                    <td class="text-center"><a href="News_edit.php?id=<?php echo $data['ID']  ?>"><i class="bi bi-pencil-square"></i> </a></td>
                    <td class="text-center"><a href="News_delete_DB.php?id=<?php echo $data['ID']  ?>"><i class="bi bi-trash"></i></a></td>
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