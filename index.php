<?php include('header.php') ?>
<?php include('main.php') ?>

            <div class="mt-4">
                <div class="row mb-4">

                    <?php
                        require "admin/connect.php";
                        $query = "SELECT * FROM dl";
                        $Data = mysqli_query($conn,$query);
                        while($dt = mysqli_fetch_assoc($Data)) {
                            ?>
                                <div class="col-xs-12 col-sm-6 col-xl-4 mb-4">
                                    <a href="./detail.php?id=<?php echo $dt['ID']?>" style="text-decoration: none; color:#000;">
                                        <div class="card">
                                            <?php
                                                echo '<img src="'.$dt['img'];
                                                echo '"class="card-img-top"alt="">';
                                            ?>
                                            
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $dt['Title'] ?></h4>
                                                <p class="card-text"><?php echo $dt['Prg'] ?></p>
                                            </div>
                                            <a href="./detail.php?id=<?php echo $dt['ID']?>" class="card-link">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            <?php 

                        }
                    ?>

                </div>
            </div>

        </div>
    </div>
    <?php
        if(isset($_GET['ok'])){
            ?>
                <script>
                    alert('Đặt vé thành công');
                </script>
            <?php
        }
        if(isset($_GET['ko'])){
            ?>
                <script>
                    alert('Đặt vé không thành công');
                </script>
            <?php
        }
    ?>

    


    <?php include('footer.php') ?>