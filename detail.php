<?php include('header.php') ?>
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
<<<<<<< HEAD
          <!-- <h2><?php echo $row['ID'] ?></h2> -->
=======
          
>>>>>>> fa16e0194e72d75dab554fe1877bf1a8f79f568b
          <?php 
        ?>
        <h2 class="mb-3 mt-3">BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG</h2>
        <p>19/11/2021</p>
        <h5 class="d-flex justify-content-center">BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG</h5>
        <div class="content" style="align-items: justify;">
          <p class="mb-2">Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng. </p>
          
          <p>Cụ thể, Bamboo Airways đã chính thức mở bán vé đường bay thẳng khứ hồi kết nối TP HCM – Điện Biên với tần suất 05 chuyến khứ hồi/ tuần và mức giá từ 159.000 đồng/ vé. Hai khung giờ khởi hành dự kiến của hãng là 10h20 cất cánh từ TP. HCM và 13h10 cất cánh từ Điện Biên. Tần suất chung sẽ tăng dần tùy theo điều kiện thực tế và nhu cầu của hành khách.</p>
          <p>Ngay khi đi vào hoạt động, đường bay thẳng TP. HCM – Điện Biên của Bamboo Airways sẽ góp phần rút ngắn đáng kể thời gian di chuyển giữa 2 thành phố ở hai đầu đất nước. Dự kiến, tổng thời gian hành trình bay giữa TP. HCM – Điện Biên khai thác bằng máy bay phản lực Embraer của Bamboo Airways sẽ chỉ còn hơn 2 tiếng đồng hồ.
          </p>
        </div>
        <div class="image" style="text-align:center;">
          <img src="./assets/img/d1.png" alt="" class="mb-3 mt-3">
          <p class="mb-5">Ảnh 1: Thời gian di chuyển giữa 2 thành phố ở 2 đầu đất nước được rút ngắn đáng kể bằng các chuyến bay thẳng của Bamboo Airways</p>
        </div>


        <div class="content">
          <p>Nhân dịp mở bán đường bay thẳng lần đầu tiên được vận hành trong lịch sử ngành hàng không này, Bamboo Airways tung loạt ưu đãi giá vé hấp dẫn để tri ân khách hàng.</p>
          <p>Trong 30 ngày đầu tiên mở bán, khi đặt vé theo đoàn từ 10 – 25 người, khách hàng sẽ được hưởng ngay ưu đãi giá vé chỉ từ 630.000 đồng/chặng (đã bao gồm toàn bộ thuế phí). Thời gian khởi hành áp dụng ưu đãi từ ngày 18/12/2021 đến hết 27/03/2022.</p>
          <p>Ngay từ hôm nay, hành khách đã có thể tiến hành đặt vé bay Bamboo Airways thông qua tất cả các kênh phân phối như website, ứng dụng di động, hệ thống phòng vé và các đại lý chính thức của hãng trên toàn quốc để được hưởng ngay ưu đãi giá vé hấp dẫn này.
          </p>
        </div>

        <div class="image" style="text-align:center;">
          <img src="./assets/img/d2.jpg" alt="" class="mb-3 mt-3">
          <p class="mb-5">Ảnh 2: Bamboo Airways tung loạt ưu đãi hấp dẫn mừng mở bán đường bay thẳng lịch sử TP HCM – Điện Biên</p>
        </div>
        
        <div class="content">
          <p>Trước đó, vào tháng 10/2021, Bamboo Airways đã chính thức đưa vào khai thác đường bay thẳng Hà Nội – Điện Biên bằng máy bay phản lực Embraer 190. Với thời gian hành trình chỉ xấp xỉ 1 giờ đồng hồ, tiết kiệm đáng kể so với hành trình kéo dài từ 9 – 12 giờ nếu di chuyển bằng đường bộ, đường bay của Bamboo Airways đã nhận được sự quan tâm của đông đảo hành khách và nhanh chóng kín chỗ ngay từ những ngày đầu mở bán vé.</p>
          <p>Đồng thời, phản lực Embraer 190 hiện đại đã cho phép Bamboo Airways đem tới cho khách hàng tiêu chuẩn dịch vụ hạng thương gia trên đường bay thẳng Điện Biên. Lần đầu tiên trong lịch sử ngành hàng không Việt Nam, khách hàng được thụ hưởng các đặc quyền bao gồm được sử dụng Phòng chờ Thương gia; không gian khoang khách trên máy bay tiện nghi, riêng tư; suất ăn và đồ uống cao cấp; tiếp viên phục vụ chuyên biệt; các quyền ưu tiên về check-in, làm thủ tục an ninh, lối đi riêng lên tàu bay… khi bay tới vùng đất lịch sử Điện Biên.</p>
          <p>Đại diện Bamboo Airways cho biết hãng dự kiếm đưa vào vận hành Phòng chờ hạng thương gia đầu tiên và duy nhất tại sân bay Điện Biên ngay trong tháng 11/2021 để đem tới cho hành khách những trải nghiệm chuyến bay trọn vẹn và thoải mái nhất, cũng như góp phần đồng bộ chất lượng dịch vụ định hướng 5 sao trên toàn mạng bay nội địa của hãng.</p>
          <p>Để đảm bảo tối đa quyền lợi cho khách hàng, Bamboo Airways xây dựng chính sách vé linh hoạt và phù hợp. Tất cả các hành khách có dấu hiệu bất thường về sức khỏe (ho, sốt, khó thở, đau rát họng…) và được phát hiện tại sân bay; hoặc hành khách phát hiện bản thân là F0/F1 sau khi thực hiện mua vé sẽ được hãng hoàn vé hoặc thay đổi chuyến bay miễn phí, đồng thời hỗ trợ hoàn vé hoặc thay đổi chuyến bay cho người thân đi cùng.</p>
          <p>Đồng thời, để đảm bảo an toàn khai thác chuyến bay cũng như thực hiện tốt công tác phòng, chống dịch Covid-19, Bamboo Airways nghiêm túc và triệt để thực hiện khuyến cáo 5K của Bộ Y tế: Khẩu trang – Khử khuẩn – Khoảng cách – Không tập trung – Khai báo y tế. Hãng đã triển khai tiêm vaccine ngừa Covid-19 cho toàn bộ cán bộ, nhân viên và các đơn vị thành viên. Bộ quy trình phòng chống dịch bệnh của Bamboo Airways được Airline Ratings đánh giá mức tuyệt đối, 7/7 sao.</p>
        </div>

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