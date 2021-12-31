<?php include('header.php') ?>
<?php include('main.php') ?>
<?php 
  $id = $_GET['id'];

?>


  <div class="container" style="box-shadow: 2px 2px 10px 3px rgba(0, 0, 0, 0.06);">
    <div class="row">
      <div class="col-md-12">
        <?php 
          require "./admin/connect.php";
          $query = "SELECT * FROM dl WHERE ID=$id";
          $data = mysqli_query($conn,$query);
          $row = mysqli_fetch_assoc($data);
          ?>
        <h2 class="mb-3 mt-3"><?php echo $row['Title'] ?></h2>
        <p ><?php echo $row['date']?></p>
        <?php
          $query = "SELECT * FROM conten WHERE ID=$id ORDER BY index_";
          $data = mysqli_query($conn,$query);
          echo '<div class="content" style="align-items: justify;">';
          while ($row = mysqli_fetch_assoc($data)){
            if ($row['h5'] != ""){
              echo '<h5>';
              echo $row['h5'];
              echo '</h5>';
            }
            if ($row['img'] != ""){
            echo  '<div class="image" style="text-align:center;">';
            echo  '<img src="';
            echo $row['img'];
            echo '" alt="" class="mb-3 mt-3">';

              if($row['img_name'] != ""){
                echo'<p class="mb-5">';
                echo $row['img_name'];
                echo'</p>';
              } 
              echo'</div>'; 
            }
            if ($row['p'] != ""){
              echo"<p>";
              echo $row['p'];
              echo"</p>";

            }


          }
          echo "</div>";
        ?>



        <!-- <div class="content" style="align-items: justify;">
          <div class="image" style="text-align:center;">
            <img src="./assets/img/d1.png" alt="" class="mb-3 mt-3">
            <p class="mb-5">Ảnh 1: Thời gian di chuyển giữa 2 thành phố ở 2 đầu đất nước được rút ngắn đáng kể bằng các chuyến bay thẳng của Bamboo Airways</p>
          </div>
          <p class="mb-2">Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng. </p>
          
          <p>Cụ thể, Bamboo Airways đã chính thức mở bán vé đường bay thẳng khứ hồi kết nối TP HCM – Điện Biên với tần suất 05 chuyến khứ hồi/ tuần và mức giá từ 159.000 đồng/ vé. Hai khung giờ khởi hành dự kiến của hãng là 10h20 cất cánh từ TP. HCM và 13h10 cất cánh từ Điện Biên. Tần suất chung sẽ tăng dần tùy theo điều kiện thực tế và nhu cầu của hành khách.</p>
          <p>Ngay khi đi vào hoạt động, đường bay thẳng TP. HCM – Điện Biên của Bamboo Airways sẽ góp phần rút ngắn đáng kể thời gian di chuyển giữa 2 thành phố ở hai đầu đất nước. Dự kiến, tổng thời gian hành trình bay giữa TP. HCM – Điện Biên khai thác bằng máy bay phản lực Embraer của Bamboo Airways sẽ chỉ còn hơn 2 tiếng đồng hồ.
          </p>
          
        </div> --> 


  <!-- footer -->
        <h5 class="d-flex justify-content-center mt-5">HAHALOLO luôn sát cánh trên mọi chuyến bay của bạn.</h5>
        <div class="contact">
          <p>Mọi thông tin chi tiết và mua vé máy bay vui lòng liên hệ qua Mạng xã hội du lịch Hahalolo:</p>
          <div class="contact-sdt">Hotline đặt vé: (+84) 915 820 933</div>
          <div class="contact-sdt mt-3 mb-3">Tổng đài đặt vé: 1900 57 12 48</div>
          <p>
            Website đặt vé:
            <a href="#" class="contact-link" style="text-decoration: none; color:#24a8d8">VÉ MÁY BAY HAHALOLO</a>
          </p>
          <p>
            Website hỗ trợ:
            <a href="#" class="contact-link" style="text-decoration: none; color:#24a8d8">TRUNG TÂM CHĂM SÓC KHÁCH HÀNG HAHALOLO </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-5">
    <div class="arrow" style="display: flex; justify-content: end;">
      <a style="text-decoration: none; margin-right: 20px;" href="index.php">
        <i class="bi bi-arrow-left-circle-fill" style="font-size: 45px; color:#24a8d8"></i>
      </a>
      <a style="text-decoration: none;" href="#">
        <i class="bi bi-arrow-up-circle-fill" style="font-size: 45px; color:#24a8d8"></i>
      </a>
    </div>
  </div>

<?php include('footer.php') ?>