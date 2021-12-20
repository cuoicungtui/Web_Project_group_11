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
                                </div>
                            <?php 

                        }
                    ?>

                </div>
            </div>

        </div>
    </div>
    
    <div class="btn-load">
        <div class="btn-bookT">Xem thêm</div>
    </div>
    


    <?php include('footer.php') ?>