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
                    <li class="active">
                        <a href="trackerAttendance.php">
                            <i class="now-ui-icons tech_watch-time"></i>
                            <p>Track Attendance</p>
                        </a>
                    </li>
                    <li>
                        <a href="trackerAttendanceHistory.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Attendance History</p>
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
                        <a class="navbar-brand" href="trackerAttendance.php">
                            <font color="#141E30">Track Attendance</font>
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
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons ui-1_settings-gear-63" style="color:#141E30"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                    <a class="dropdown-item" href="loginPage.php" style="color:#141E30">Logout</a>
                                </div>
                            </li>
                        </ul>
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
                                <!-- <p>
                                    <b>LEGEND:</b>
                                    &nbsp;
                                    ABS  = absent
                                    &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
                                    LATE = late
                                    &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
                                    ED   = early dismissal
									 &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
									SUB = substitute
									 &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
									SW=seatwork
									 &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
									VR = Vacant Room
									 &nbsp;&nbsp;
                                    | 
                                    &nbsp;&nbsp;
									US= Unscheduled Class
                                </p> -->
                            </div>
                            <div class="card-body">
                                <div id="wrapper">
                                    <h2 class="module">DLSU Attendance</h2>
                                    
                                </div>
                                <!-- START OF DATE SCRIPT-->

                                        <script type="text/javascript">
                                            var tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                            var tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                                            function GetClock() {
                                                var d = new Date();
                                                var nday = d.getDay(),
                                                    nmonth = d.getMonth(),
                                                    ndate = d.getDate();
                                                var nhour = d.getHours(),
                                                    nmin = d.getMinutes(),
                                                    nsec = d.getSeconds(),
                                                    ap;

                                                if (nhour == 0) {
                                                    ap = " AM";
                                                    nhour = 12;
                                                } else if (nhour < 12) {
                                                    ap = " AM";
                                                } else if (nhour == 12) {
                                                    ap = " PM";
                                                } else if (nhour > 12) {
                                                    ap = " PM";
                                                    nhour -= 12;
                                                }

                                                if (nmin <= 9) nmin = "0" + nmin;
                                                if (nsec <= 9) nsec = "0" + nsec;

                                                document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
                                            }

                                            window.onload = function() {
                                                GetClock();
                                                setInterval(GetClock, 1000);
                                            }

                                        </script>
                                        <div id="clockbox"></div>

                                        <!-- END OF DATE SCRIPT-->
                                <table class="table">
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
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $connect = mysqli_connect('localhost','root','','sw-engg');

                                        if (!$connect) 
                                        {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }
                                            $day=date("l"); 
                                              // require_once("../sys/connect.php");
                                               /*$data1 ="SELECT f_id, f_firstname, f_lastname,c_code, c_time, c_room,c_faculty FROM faculty,course WHERE f_id=c_faculty";*/
                                               $data1 ="SELECT f_id, f_firstname, f_lastname,c_id,c_code, c_time, c_day, 
                                                c_room,c_section, as_code,a_id, a_section, a_status, a_date, a_remarks, as_name
                                                FROM faculty ,course,attendance,attendance_status
                                                WHERE f_id=c_faculty AND a_course=c_id AND a_status=as_code AND c_day ='TH'
                                                GROUP BY c_id";
                                        
                                            $data2 ="SELECT f_id, f_firstname, f_lastname,c_id,c_code, c_time, c_day, 
                                                c_room,c_section, as_code,a_id, a_section, a_status, a_date, a_remarks, as_name
                                                FROM faculty ,course,attendance,attendance_status
                                                WHERE f_id=c_faculty AND a_course=c_id AND a_status=as_code AND c_day ='WF'
                                                GROUP BY c_id ";
                                            if ($day == "Tuesday" OR $day == "Thursday"){
                                               $query1 = mysqli_query($connect,$data1);
                                               if(mysqli_num_rows($query1)>0){
                                                   while($row = mysqli_fetch_array($query1)){
                                                       echo
                                                       "<tr>".
                                                       "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                                       "<td>".$row["c_code"]."</td>".
                                                       "<td>".$row["c_section"]."</td>".
                                                       "<td>".$row["c_time"]."&ensp;".$row["c_day"]."</td>".
                                                       "<td>".$row["c_room"]."</td>".

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'&a_remarks='.$row["a_remarks"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                            <option name="a_status" value="'.$row["a_status"].'" selected="'.$row["a_status"].'">'.$row["as_name"].'</option>
                                                            <option name="a_status" value="AB"> Absent</option>
                                                            <option name="a_status" value="LA"> Late</option>
                                                            <option name="a_status" value="ED"> Early Dismissal</option>
                                                            <option name="a_status" value="SB"> Substitute</option>
                                                            <option name="a_status" value="SW"> Seatwork</option>
                                                            <option name="a_status" value="US"> Unscheduled Class</option>
                                                        </select>
                                                        </div></td>'.
                                                       '<td><input type="text" name="a_remarks" /></td>'.
                                                       '<td><input type="submit" id="'.$row["c_id"].' name="activate" class="btn btn-primary btn-fill"  style="background-color:green" value="SUBMIT"/></td></form>'
                                                       ."</tr>";
                                                   }
                                            
                                               }
                                            } else if ($day == "Wednesday" OR $day == "Friday" OR $day == "Monday") {
                                                $query2 = mysqli_query($connect,$data2);
                                               if(mysqli_num_rows($query2)>0){
                                                   while($row = mysqli_fetch_array($query2)){
                                                       echo
                                                       "<tr>".
                                                       "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                                       "<td>".$row["c_code"]."</td>".
                                                       "<td>".$row["c_section"]."</td>".
                                                       "<td>".$row["c_time"]."&ensp;".$row["c_day"]."</td>".
                                                       "<td>".$row["c_room"]."</td>".

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'&a_remarks='.$row["a_remarks"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                    <option name="a_status" value="'.$row["a_status"].'" selected="'.$row["a_status"].'">'.$row["as_name"].'</option>
                                                    <option name="a_status" value="AB"> Absent</option>
                                                    <option name="a_status" value="LA"> Late</option>
                                                    <option name="a_status" value="ED"> Early Dismissal</option>
                                                    <option name="a_status" value="SB"> Substitute</option>
                                                    <option name="a_status" value="SW"> Seatwork</option>
                                                    <option name="a_status" value="US"> Unscheduled Class</option>
                                                </select>
                                                        </div></td>'.
                                                       '<td><input type="submit" id="'.$row["c_id"].' name="activate" class="btn btn-primary btn-fill"  style="background-color:green" value="SUBMIT" onclick="updateTracker();"/></td></form>'
                                                       ."</tr>";
                                                   }
                                            
                                               }
                                            }
                                        
                                        
                                           ?>
                                    </tbody>
                                </table>
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

<script>
    function updateTracker() {
        var prompt = confirm("Are you sure you wish to proceed?");
        if (prompt==true) {
            return alert("Track Attendance has been submitted!");
            
        } 
        else {
            return false;	
        }
    }
</script>
</html>
