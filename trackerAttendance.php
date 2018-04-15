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

                                <center>

                                    <h5 class="card-category">Today is</h5>
                                    <h4 class="card-title">

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

                                    </h4>
                            </div>

                            <div class="card-footer">
                                <div class="stats">
                                    <!--<i class="now-ui-icons location_compass-05"></i>Current local time-->
                                </div>

                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">

                                        <tbody>
                                            <?php 


$connect = mysqli_connect('localhost','root','','sw-engg');

if (!$connect) 
{
    die("Connection failed: " . mysqli_connect_error());
}
    
    
        
        //echo "<script type='text/javascript'>alert('You have accidentaly inputed a wrong value please try again')</script>";
        // Displays table after search button is touched but not filled
        //$sql = "SELECT trackingNumber,requestingPartyID,title,type,startingDate,duration FROM documents WHERE store_safe='1'";
        $sql = "SELECT c_day, f_firstname, f_lastname,c_code, c_time, c_section, c_room,c_faculty FROM faculty ,course WHERE f_id=c_faculty";
        


        $result = mysqli_query($connect,$sql);
        
        
        if ( mysqli_num_rows($result) > 0) {    
            echo 
            '<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                <tr>
              
                <th width="10%" border = "1"><div align ="center"><b>Faculty Name</div></b></td>
                <th width="10%" border = "1"><div align ="center"><b>Course</div></b></td>
                <th width="10%" border = "1"><div align ="center"><b>Section</div></b></td>
                <th width="10%" border = "1"><div align ="center"><b>Time</div></b></td>
                <th width="10%" border = "1"><div align ="center"><b>Venue</div></b></td>
                <th width="10%" border = "1"><div align ="center"><b>Attendance Status</div></b></td>
             
                <th width="10%" border = "1"><div align ="center"><b>Submit</div></b></td>
                </tr>';
        
            //outputs data 
            $ctr = 0;
            while ($row = $result ->fetch_assoc()) {
                echo "<tr>
                        <td align='center'>".$row["f_firstname"].$row["f_lastname"]."</td>
                        <td align='center'>".$row["c_code"]."</td>
                        <td align='center'>".$row["c_section"]."</td>
                        <td align='center'>".$row["c_time"]."</td>
                        <td align='center'>".$row["c_room"]."</td>
                        <td align='center'>".
                            "<select name='attendancestat'>
                              <option value='AB'>ABSENT</option>
                              <option value='LA'>LATE</option>
                              <option value='ED'>EARLY DISMISSAL</option>
                              <option value='SB'>SUBSTITUTE</option>
                              <option value='SW'>SEATWORK</option>
                              <option value='US'>UNSCHEDULED CLASS</option>
                            </select>"."</td>
                        <td align='center'>"."<form action='trackerAttendance.php' method='post'><input type='submit' name='Submit' value='Submit'></form>";
            }
            echo "</table>";
            
      if (isset($_POST['Submit'])) {
                $ast=$_POST['attendancestat'];
                if (!empty($ast)){
                    echo $ast;
                } else echo "Attendance Stat is <b>empty</b> <br>";

                /**/
                $msql=mysqli_query($connect,"SELECT as_id AS aid FROM attendance_status WHERE as_code='{$ast}'");
                if($msql)
                {
                    while($row=mysqli_fetch_array($msql))
                    {
                        $attendancestat=$row['aid'];
                    }
                   $sql2 = mysqli_query($connect,"SELECT f_firstname, f_lastname,c_code, c_time, c_room,c_faculty, c_id, c_section FROM faculty ,course WHERE f_id=c_faculty");
                    if($sql2)
                    {
                        while($row=mysqli_fetch_array($sql2))
                        {
                            
                            $cid=$row['c_code'];
                            $csection=$row['c_section'];
                            $fname=$row['f_firstname'];
                            $lname=$row['f_lastname'];
                        }
                        echo "Course Code: $cid <br>"; 
                        echo "Section: $csection <br>"; 
                        echo "Faculty Name: $fname $lname <br>";
                        $sql3= mysqli_query($connect,"INSERT INTO attendance(a_course, a_section, a_status,a_fname, a_lname) VALUES
                        ('{$cid}', '{$csection}', '{$ast}', '{$fname}','{$lname}' )");
                        if ($sql3) 
                        {
                            echo "New record created successfully";
                        } 
                        else 
                        {
                            echo "Couldn't insert records"; 
                        } // end if sql3
                    } //end if sql2
                    else
                            echo "Couldn't select records";
                }// end if mysql   
            }// end isset submit   
        }//
?>
                                        </tbody>
                                    </table>
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
