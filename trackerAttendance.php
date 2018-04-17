<!DOCTYPE html>

<?php

if(isset($_POST['search']))
    {
        $C_CODE = $_POST['search'];
    } ?>

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
                            <p>Change Password</p>
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
                            <font color="#141E30">Track Attendance</font>
                        </a>
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

                                   <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>"> <input type="text" name = "search" class="form-control col-sm-2" placeholder="Search by course..."> 
                    &nbsp;<button type = "submit" name = "submitCourse" class = "btn btn-info">OK</button></div>
                    <br>
                </form>
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
                                            <b>Time / Day</b>
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
                                            $day="SELECT DAYNAME(NOW())";
                                            $getDate = mysqli_query($connect,$day);
                                            $row = mysqli_fetch_array($getDate, MYSQLI_ASSOC);
                                            $dateNow = $row['DAYNAME(NOW())'];

                                           // echo $dateNow;



                                            // query if date is T/H/TH
                                            $data1 ="SELECT c_id,c_code, c_time, c_day, c_room,c_section, f_id, f_firstname, f_lastname FROM COURSE JOIN faculty on c_faculty = f_id WHERE (c_day = 'TH' or c_day LIKE 'T%' or c_day LIKE '%H') GROUP BY c_id ORDER BY c_time";
                                        
                                            // QUERY IF DATE IS W/F/WF
                                            $data2 ="SELECT c_id,c_code, c_time, c_day, c_room,c_section, f_id, f_firstname, f_lastname FROM COURSE JOIN faculty on c_faculty = f_id WHERE (c_day = 'WF' or c_day LIKE 'W%' or c_day LIKE '%F') GROUP BY c_id ORDER BY c_time";

                                            // QUERY IF DATE IS S
                                            $data3 ="SELECT c_id,c_code, c_time, c_day, c_room,c_section, f_id, f_firstname, f_lastname FROM COURSE JOIN faculty on c_faculty = f_id WHERE (c_day = 'S') GROUP BY c_id ORDER BY c_time";

                                            // QUERY IF DATE IS M
                                            $data4 ="SELECT c_id,c_code, c_time, c_day, c_room,c_section, f_id, f_firstname, f_lastname FROM COURSE JOIN faculty on c_faculty = f_id WHERE (c_day = 'M') GROUP BY c_id ORDER BY c_time";


                                            if ($dateNow == "Tuesday" OR $dateNow == "Thursday"){
                                               $query1 = mysqli_query($connect,$data1);
                                               if(mysqli_num_rows($query1)>0){
                                                   while($row = mysqli_fetch_array($query1, MYSQLI_ASSOC)){
                                                    echo
                                                       "<tr>".
                                                       "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                                       "<td>".$row["c_code"]."</td>".
                                                       "<td>".$row["c_section"]."</td>".
                                                       "<td>".$row["c_time"]."&ensp;".$row["c_day"]."</td>".
                                                       "<td>".$row["c_room"]."</td>".

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                    <option name="a_status" value="PR"> Present</option>
                                                            <option name="a_status" value="AB"> Absent</option>
                                                            <option name="a_status" value="LA"> Late</option>
                                                            <option name="a_status" value="ED"> Early Dismissal</option>
                                                            <option name="a_status" value="SB"> Substitute</option>
                                                            <option name="a_status" value="SW"> Seatwork</option>
                                                            <option name="a_status" value="US"> Unscheduled Class</option>
                                                        </select>
                                                        </div></td>'.
                                                       '<td><input type="submit" id="'.$row["c_id"].' name="activate" class="btn btn-primary btn-fill"  style="background-color:green" value="SUBMIT"/></td></form>'
                                                       ."</tr>";
                                                   }
                                            
                                               }
                                            } else if ($dateNow == "Wednesday" OR $dateNow == "Friday") {
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

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                    <option name="a_status" value="PR"> Present</option>
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
                                            } else if ($dateNow == "Monday") {
                                                 echo $dateNow;
                                                $query4 = mysqli_query($connect,$data4);
                                               if(mysqli_num_rows($query4)>0){
                                                   while($row = mysqli_fetch_array($query4)){
                                                       echo 
                                                       "<tr>".
                                                       "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                                       "<td>".$row["c_code"]."</td>".
                                                       "<td>".$row["c_section"]."</td>".
                                                       "<td>".$row["c_time"]."&ensp;".$row["c_day"]."</td>".
                                                       "<td>".$row["c_room"]."</td>".

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                    <option name="a_status" value="PR"> Present</option>
                                                    <option name="a_status" value="AB"> Absent</option>
                                                    <option name="a_status" value="LA"> Late</option>
                                                    <option name="a_status" value="ED"> Ea rly Dismissal</option>
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

                                            else if ($dateNow == "Saturday") {
                                                 echo $dateNow;
                                                $query3 = mysqli_query($connect,$data3);
                                               if(mysqli_num_rows($query3)>0){
                                                   while($row = mysqli_fetch_array($query3)){
                                                       echo 
                                                       "<tr>".
                                                       "<td>".$row["f_firstname"]." ".$row["f_lastname"]."</td>".
                                                       "<td>".$row["c_code"]."</td>".
                                                       "<td>".$row["c_section"]."</td>".
                                                       "<td>".$row["c_time"]."&ensp;".$row["c_day"]."</td>".
                                                       "<td>".$row["c_room"]."</td>".

                                                        '<form action="../sys/insertAttendance.php?id='.$row["c_id"].'&a_course='.$row["c_code"].'&a_section='.$row["c_section"].'" method="post">
                                                        <td>
                                                        <div id="showChoices">
                                                        <select name="a_status">
                                                    <option name="a_status" value="PR"> Present</option>
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
