<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <link rel="icon" sizes="76x76" href="../assets/img/logo.png">

    <link rel="icon" type="image/png" href="../assets/img/logo.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Faculty Attendance Tracker</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="green">
            <div class="logo">
                <a href="adminDashboard.php" class="simple-text logo-mini">
                    <img src="../assets/img/logo.png" />
                </a>
                <a href="adminDashboard.php" class="simple-text logo-normal">
                    DE LA SALLE UNIVERSITY 
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li>
                        <a href="trackerUserProfile.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="trackerAttendance.php">
                            <i class="now-ui-icons tech_watch-time"></i>
                            <p>Track Attendance</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="trackerAttendanceHistory.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Attendance History</p>
                        </a>
                    </li>
                     <li>
                        <a href="logout.php">
                            <i class="now-ui-icons arrow"></i>
                            <p>Logout</p>
                        </a>
                    </li>                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="trackerAttendance.php">
                            <font color="#141E30">Attendance History Report</font>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>

                        </form>
                     </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <br><br><br><br><br>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <p>
                                    <b>Track Previously Recorded Attendance</b>

                                </p>
                                <form id="selectForm" method="post">

                                    <!--<select name="selectDate" onchange="onSelectChange();">
                                    <?php 
                                        require_once("../../mysql_connect.php");
                                        $query="SELECT a_date FROM attendance GROUP BY a_date ORDER BY a_date DESC";
                                        $datequety = mysqli_query($con,$query);
                                            if(mysqli_num_rows($datequety)>0){
                                                echo'<option value="Select Date">Select Date...</option>';
                                                while($row = mysqli_fetch_array($datequety)){
                                                    echo'<option value="'.$row['a_date'].'">'.$row['a_date'].'</option>';
                                                            }
                                                        }else{
                                                            echo "Error";
                                                        }
                                        $date=$_POST['selectDate'];
                                    ?>
                                </select>-->
                                    <div class="input-group no-border">
                                        <input type="date" name="selectDate" onchange="onSelectChange();" value="<?php echo $date?>" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_calendar-60" style="color:#141E30"></i>
                                        </span>
                                    </div>

                                </form>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                       require_once("../../mysql_connect.php");
                                       if (isset($_POST['selectDate'])) 
                                        { 
                                         $date=$_POST['selectDate'];
                                        } 

                                       $data1 ="SELECT f_id, f_firstname, f_lastname,c_id,c_code, c_section, c_time, c_day, c_room,as_code,a_id,a_status, a_date, a_remarks, DAYNAME(a_date) as day, as_name, as_id, as_code
                                        FROM faculty ,course,attendance,attendance_status
                                        WHERE f_id=c_faculty AND a_course=c_id AND a_statusID=as_id
                                        AND a_date='$date'";
                                       $query1 = mysqli_query($dbc,$data1);
                                       if(mysqli_num_rows($query1)>0){
                                           echo '<table class="table">
                                                    <thead style="color:#01703D">
                                                        <th>
                                                            <b>Attendance History Report</b>
                                                        </th>
                                                        <th style="float:right"><b>'.date("F j, Y", strtotime($date)).'</b></th>
                                                    </thead>
                                                    <tbody>
                                                    <tr><td></td><td></td></tr>
                                                    </tbody>
                                                </table>';
                                           echo '<table class="table">
                                            <thead style="color:#01703D">
                                                <th>
                                            <b>Faculty Name</b>
                                        </th>
                                        <th>
                                            <b>Course</b>
                                        </th>
                                        <th>
                                            <b>Section</b>
                                        </th>
                                        <th>
                                            <b>Time</b>
                                        </th>
                                        <th>
                                            <b>Venue</b>
                                        </th>
                                        <th>
                                            <b>Status</b>
                                        </th>
                                        <th>
                                            <b>Remarks</b>
                                        </th>
                                                <th>
                                                    <b>Action</b>
                                                </th>
                                            </thead>
                                            <tbody>';
                                           while($row = mysqli_fetch_array($query1)){
                                               echo
                                               "<tr>".
                                               "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                               "<td>".$row["c_code"]."</td>".
                                               "<td>".$row["c_section"]."</td>".
                                               "<td>".$row["c_day"]."</td>".
                                               "<td>".$row["c_room"]."</td>".
                                               /*'<form action="../sys/updateTrackerHistory.php?id='.$row["c_id"].'&a_remarks='.$row["a_remarks"].'" method="post"><td><input type="text" value="'.$row["a_status"].'" name="a_status" /></td>'.*/
                                                   
                                                '<form action="../sys/updateTrackerHistory.php?id='.$row["c_id"].'&a_remarks='.$row["a_remarks"].'" method="post">
                                                <td>
                                                <div id="showChoices">
                                                <select name="a_status">
                                                    <option name="a_status" selected="'.$row["a_status"].'">'.$row["a_status"].'</option>
                                                    <option name="a_status" value="AB">AB</option>
                                                    <option name="a_status" value="LA">LA</option>
                                                    <option name="a_status" value="ED">ED</option>
                                                    <option name="a_status" value="SB">SB</option>
                                                    <option name="a_status" value="SW">SW</option>
                                                    <option name="a_status" value="US">US</option>
                                                </select>
                                                </div></td>'.
                                               '<td><input type="text" value="'.$row["a_remarks"].'" name="a_remarks"/></td>'.
                                               '<td><input type="submit" id="'.$row["c_id"].' name="activate" class="btn btn-primary btn-fill"  style="background-color:green" value="UPDATE" onclick="updateHistory()"/></td></form>'
                                               ."</tr>";
                                               
                                           }
                                           echo '</tbody></table>';
                                           
                                       }
                                           /*else  {
                                               echo "No records found.";
                                           }*/
                                               
                                   ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())

                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank" style="color:#01703D">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank" style="color:#01703D">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<script>
    //submit select tag (for date change)
    function onSelectChange() {
        document.getElementById('selectForm').submit();
    }

</script>
    
<script>
function updateHistory() {
    var txt;
    var alert = confirm("Are you sure you wish to proceed?");
    if (alert==true) {
        txt = "Attendance History Report has been updated!";
    } 
    else {
        document.getElementById('selectForm').submit();
    }
    //document.getElementById("demo").innerHTML = txt;
}
</script>

<!--   Core JS Files   -->

<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>


</html>
