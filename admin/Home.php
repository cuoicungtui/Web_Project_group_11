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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>