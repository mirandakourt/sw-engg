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
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li >
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
                    </li>
                </ul>
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
                        <a class="navbar-brand">
                            <font color="#141E30">Attendance History Report</font>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                
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
                                <form id="selectForm" method="get" action="../sys/trackerAttendanceHistory.php?">

                                    <!--<select name="selectDate" onchange="onSelectChange();">
                                    <?php 
                                        require_once("../sys/connect.php");
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
                                        $date=$_POST['a_date'];
                                    ?>
                                </select>-->
                                    
                                    
                                    <div class="input-group no-border">
                                        <input type="date" name="a_date" onchange="onSelectChange();" value="<?php echo $_GET['a_date'] ?>" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_calendar-60" style="color:#141E30"></i>
                                        </span>
                                    </div>

                                </form>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                       require_once("../sys/connect.php");
                                       if (isset($_GET['a_date'])) 
                                        { 
                                         $date=$_GET['a_date'];
                                        } 

                                       $data1 ="SELECT a_id, f_id, f_firstname, f_lastname,c_id, c_code, c_section, c_time, c_day, c_room,as_code,a_id,a_status, a_date, a_remarks, DAYNAME(a_date) as day, as_name, as_id, as_code, as_name
                                        FROM faculty ,course,attendance,attendance_status
                                        WHERE f_id=c_faculty AND a_course=c_id AND a_status=as_code AND a_date='$date'
                                        ORDER BY a_id desc;";
                                       $query1 = mysqli_query($con,$data1);
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
                                                   
                                                '<form action="../sys/updateTrackerHistory.php?id='.$row["c_id"].'&a_remarks='.$row["a_remarks"].'&a_date='.$row["a_date"].'" method="post">
                                                <input type="hidden" name="a_date" value="'.$row["a_date"].'"/>
                                                <td>
                                                <div id="showChoices">
                                                <select name="a_status" class="form-control">
                                                    <option name="a_status" value="'.$row["a_status"].'" selected="'.$row["a_status"].'">'.$row["as_name"].'</option>
                                                    <option name="a_status" value="AB"> Absent</option>
                                                    <option name="a_status" value="LA"> Late</option>
                                                    <option name="a_status" value="ED"> Early Dismissal</option>
                                                    <option name="a_status" value="SB"> Substitute</option>
                                                    <option name="a_status" value="SW"> Seatwork</option>
                                                    <option name="a_status" value="US"> Unscheduled Class</option>
                                                </select>
                                                </div></td>'.
                                               '<td><input class="form-control" type="text" value="'.$row["a_remarks"].'" name="a_remarks"/></td>'.
                                               '<td><input type="submit" id="'.$row["c_id"].' name="activate" class="btn btn-primary btn-fill" style="background-color:green" value="UPDATE" onclick="return updateHistory();"/></td></form>'
                                               ."</tr>";
                                               
                                           }
                                           echo '</tbody></table>';
                                           
                                       }
                                           else  {
                                               echo "No records found.";
                                           }
                                               
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
     

    function updateHistory() {
        if (confirm("Are you sure you wish to update this history?")) {
        window.location.href = "../sys/updateTrackerHistory.php";
    }
    else {
        return false;	
    }
    }
    
    //submit select tag (for date change)
    function onSelectChange() {
        document.getElementById('selectForm').submit();
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
