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
    <h1 class="mt-3 text-center">Conten</h1>
    <a class="btn btn-primary mb-5 bt-3" href="News_add_conten.php?add_conten=<?php echo $_GET['id'] ?>" role="button">Add conten</a>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Index</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Name_image</th>                            
                <th scope="col" class="text-center">Paragraph</th>
                <th scope="col" class="text-center">Change </th>
                <th scope="col" class="text-center">Delete </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = $_GET['id'];
            include "connect.php";
            $query = "SELECT * FROM Conten Where ID = $id";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $data['ID']  ?></th>
                  
                    <td><?php echo $data['h5']  ?></td>
                    <td><?php echo $data['index_']  ?></td>
                    <td class="text-center"><img src=".<?php echo $data['img'] ?>" class="img-thumbnail" alt="..." width="75px" height="75px"></td>  
                    <td ><?php echo $data['img_name']  ?></td>            
                    <td style=" width: 60%;}"><?php echo $data['p']  ?></td>
                    <td class="text-center"><a href="News_edit_conten.php?id=<?php echo $data['ID'] ?>&index=<?php echo $data['index_']?>"><i class="bi bi-pencil-square"></i> </a></td>
                    <td class="text-center"><a href="News_delete_conten.php?id=<?php echo $data['ID'] ?>&index=<?php echo $data['index_']?>"><i class="bi bi-trash"></i></a></td>
                    
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