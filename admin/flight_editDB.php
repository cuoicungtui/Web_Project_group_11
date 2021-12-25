<?php
    if(!isset($_POST['submit'])){
        header('location:index.php');
        return;
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
    $query = "UPDATE list_flight SET 	Code_Plane = '$code_plane',Start_Date ='$start_date',End_Date='$end_date',Start_Time='$start_time',	End_Time ='$end_time',Departure_Plane ='$departure_plane',To_Plane='$to_plane',Price_L1= $L1,Price_L2 = $L2 WHERE Code_Flight  ='$code_flight'";
    $result =  $conn->query($query);
    if($result){
      header('location:flight_admin.php');   
    }else{ 
       header('location:flight_add.php?err');
    }
?>