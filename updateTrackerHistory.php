<?php session_start();?>

<?php
    require_once("../sys/connect.php");

    //Properties
    if(isset($_GET["id"])){
            $id =  $_GET["id"];
            $stat = $_POST["a_status"];
            $remarks = $_POST["a_remarks"];
            $date=$_GET['a_date'];
            //$sqldata ="";
        
            $sqldata = "update attendance 
            set a_status='$stat', a_remarks='$remarks' 
            where a_course='$id' and a_date='$date';";
        

            if(isset($sqldata)){
                $query = mysqli_query($con,$sqldata) or die(mysqli_error($con));
                //header('Location: '.'../sys/trackerAttendanceHistory.php');
                
            }
        //header('Location: '.'../sys/trackerAttendanceHistory.php');
        echo "<script>
    alert('Attendance History Report has been updated!');
    </script>";
    header('Location:'.'../sys/trackerAttendanceHistory.php?a_date='.$date);
    }
    else {
       header('Location: '.'../sys/trackerAttendanceHistory.php');
    }
    
?>
