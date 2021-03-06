<?php
session_start();
if (!isset($_SESSION['USERNAME_admin'])) {
    header("location:index.php");
    return;
}
?>


<?php
include "header_admin.php";
?>

<div class="container" style="margin-top: 6%;">
    <h3 class="text-center mt-auto">Add flight</h3>

    <Form action="flight_addDB.php" method="Post" onsubmit="return check_flight_add()" >
        <script src="../assets/js/flight_add.js"></script>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="Code_Flight " class="form-label">Code_Flight</label>
                <input type="text" class="form-control" id="Code_Flight" name="Code_Flight" placeholder="Code_Flight" required >
            </div>
            <div class="mb-3 col-6">
                <label for="Code_Plane " class="form-label">Code_Plane</label>    
                <select class="form-select" aria-label="Code_Plane" id="Code_Plane" name="Code_Plane">
                    <?php
                        require_once "connect.php";
                        $query = "SELECT * FROM list_planes";
                        $result = $conn->query($query);
                        while($row = $result->fetch_assoc() ){
                            echo  '<option value="'.$row['Code_Plane'].'">'.$row['Code_Plane'].'</option>';
                        }
                    ?>                                
                </select>

            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="Start_Date " class="form-label">Start_Date</label>
                <input type="date" class="form-control" id="Start_Date" name="Start_Date" placeholder="Start_Date" required >
            </div>

            <div class="mb-3 col-6">
                <label for="End_Date " class="form-label">End_Date</label>
                <input type="date" class="form-control" id="End_Date" name="End_Date" placeholder="End_Date" required >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="Start_Time" class="form-label">Start_Time</label>
                <input type="time" class="form-control" id="Start_Time" name="Start_Time" placeholder="Start_Time" required >
            </div>

            <div class="mb-3 col-6">
                <label for="End_Time " class="form-label">End_Time </label>
                <input type="time" class="form-control" id="End_Time " name="End_Time" placeholder="End_Time " required >
            </div>
        </div>
        

        <div class="row">
            <div class="mb-3 col-6">
                <label for="Departure_Plane" class="form-label">Departure_Plane</label>

                <select class="form-select" aria-label="Departure_Plane" id="Departure_Plane" name="Departure_Plane">
                <option value="H?? N???i">H?? N???i</option>
                    <option value="??i???n Bi??n Ph???">??i???n Bi??n Ph???</option>
                    <option value="H??i Ph??ng">H??i Ph??ng</option>
                    <option value="???? N???ng">???? N???ng</option>
                    <option value="Qu???ng Ninh">Qu???ng Ninh</option>
                    <option value="Nha Trang">Nha Trang</option>
                    <option value="???? L???t">???? L???t</option>
                    <option value="Ph?? Qu???c">Ph?? Qu???c</option>
                    <option value="Qu???ng Nam">Qu???ng Nam</option>
                    <option value="Pleiku">Pleiku</option>
                    <option value="Ki??n Giang">Ki??n Giang</option>
                    <option value="C??n ?????o">C??n ?????o</option>
                    <option value="C?? Mau">C?? Mau</option>
                    <option value="Ph?? Y??n">Ph?? Y??n</option>
                    <option value="Vinh">Vinh</option>
                    <option value="Hu???">Hu???</option>
                </select>

        
                
            </div>

            <div class="mb-3 col-6">
                <label for="To_Plane" class="form-label">To_Plane</label>
                <select class="form-select" aria-label="To_Plane" name="To_Plane" id="To_Plane">
                <option value="H?? N???i">H?? N???i</option>
                    <option value="??i???n Bi??n Ph???">??i???n Bi??n Ph???</option>
                    <option value="H??i Ph??ng">H??i Ph??ng</option>
                    <option value="???? N???ng">???? N???ng</option>
                    <option value="Qu???ng Ninh">Qu???ng Ninh</option>
                    <option value="Nha Trang">Nha Trang</option>
                    <option value="???? L???t">???? L???t</option>
                    <option value="Ph?? Qu???c">Ph?? Qu???c</option>
                    <option value="Qu???ng Nam">Qu???ng Nam</option>
                    <option value="Pleiku">Pleiku</option>
                    <option value="Ki??n Giang">Ki??n Giang</option>
                    <option value="C??n ?????o">C??n ?????o</option>
                    <option value="C?? Mau">C?? Mau</option>
                    <option value="Ph?? Y??n">Ph?? Y??n</option>
                    <option value="Vinh">Vinh</option>
                    <option value="Hu???">Hu???</option>
                </select>
            </div>
        </div>
        

        <div class="row">
            <div class="mb-3 col-6">
                <label for="Price_L1" class="form-label">Price_L1</label>
                <input type="number" class="form-control" id="Price_L1" name="Price_L1" placeholder="Price_L1" required >
            </div>

            <div class="mb-3 col-6">
                <label for="Price_L2" class="form-label">Price_L2</label>
                <input type="number" class="form-control" id="Price_L2" name="Price_L2" placeholder="Price_L2" required >
            </div>

        </div>
        
       
        <div class="mb-5 ">
            <input class="btn btn-primary ms-auto" name="submit" type="submit" value="Submit">
        </div>
        
        
    </Form>
    <script >
        <?php
        if(isset($_GET['err'])){
            echo 'alert("Add flight failed\nCode flight already exists")';
        }
        ?>
    </script>

</div>

<?php
include "footer.php";
?>