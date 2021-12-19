<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
  header("location:index.php");
}
?>


<?php
 include "header_admin.php";
?>
<div class="container mt-5">
    <h3>Thông Tin </h3>
</div>

<?php
 include "footer.php";
?>