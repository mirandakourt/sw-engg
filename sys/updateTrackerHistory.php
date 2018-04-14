<?php session_start();?>

<?php
    require_once("../sys/connect.php");

    //Properties
    if(isset($_GET["id"])){
            $id =  $_GET["id"];
            $stat = $_POST["a_status"];
            $remarks = $_POST["a_remarks"];
            //$sqldata ="";  
            $sqldata = "update attendance join course on attendance.a_id = course.c_id set a_status='$stat', a_remarks='$remarks' where c_id='$id';";

            if(isset($sqldata)){
                $query = mysqli_query($con,$sqldata) or die(mysqli_error($con));
                header('Location: '.'../sys/trackerAttendanceHistory.php');
            }
        
    }
    else {
       header('Location: '.'../sys/trackerAttendanceHistory.php');
    }
?>
