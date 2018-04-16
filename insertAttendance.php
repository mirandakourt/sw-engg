<?php session_start();?>

<?php
    require_once("../../mysql_connect.php");
    if(isset($_GET["id"])){
            $id =  $_GET["id"];
            //$course = $GET["c_code"];
            //$section = $GET["c_section"];
            $stat = $_POST["a_status"];
            //$sqldata ="";
            $sqldata = "insert into attendance(a_course, a_section, a_status, a_date) 
            values('$id',(SELECT c_section from course WHERE c_id='$id'),'$stat', NOW())";

            if(isset($sqldata)){
                $query = mysqli_query($dbc,$sqldata) or die(mysqli_error($dbc));
                
                //header('Location: '.'../sys/trackerAttendanceHistory.php');
                echo '<script language="javascript">';
                echo 'alert("Tracker has been updated.")';
                echo '</script>';
                
            }
        header('Location: '.'../sys/trackerAttendance.php');
        
    }
    else {
       header('Location: '.'../sys/trackerAttendance.php');
    }
    
?>

?>
