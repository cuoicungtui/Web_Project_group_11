<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
    }
?>


<?php
    $code_flight = $_POST['Code_Flight'];
    $code_plane = $_POST['Code_Plane'];
    $start_date = $_POST['Start_Date'];
    $end_date = $_POST['End_Date'];
    $start_time = $_POST['Start_Time'];
    $end_time = $_POST['End_Time'];
    $departure_plane = $_POST['Departure_Plane'];
    $to_plane = $_POST['To_Plane'];
    $L1 = $_POST['Price_L1'];
    $L2 = $_POST['Price_L2'];
    require_once "connect.php";
    $query = "INSERT INTO list_flight Values('$code_flight','$code_plane','$start_date','$end_date','$start_time','$end_time','$departure_plane','$to_plane',$L1,$L2)";
    $conn->query($query,$result);
    if($result){
        header('location:flight_admin.php');
    }else{
        header('location:flight_add.php?err');
    }
?>