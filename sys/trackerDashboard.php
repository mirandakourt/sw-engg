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
                    <li class="active">
                        <a href="trackerDashboard.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Home</p>
                        </a>
                    </li>
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
                       <li>
                        <a href="trackerAttendanceHistory.php">
                            <i class="now-ui-icons tech_watch-time"></i>
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
                        <a class="navbar-brand" href="adminDashboard.php">
                            <font color="#141E30">Welcome!</font>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/sw-engg/sys/loginPage.php" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                    Logout
                                    <i class="now-ui-icons arrows-1_minimal-right" style="color:#141E30"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <br><br><br><br><br>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-chart">
                            <div class="card-header">
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
                            <div class="card-body">
                                <div class="chart-area">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <!-- START OF ANALOG CLOCK -->

                                    <iframe src="http://free.timeanddate.com/clock/i64lrdyo/n145/szw210/szh210/hoc000/hbw0/hfc000/cf100/hgr0/fav0/fiv0/mqcfff/mql15/mqw4/mqd94/mhcfff/mhl15/mhw2/mhd94/mmv0/hwm2/hhcbbb/hmcddd/hsceee" frameborder="0" width="210" height="210"><br></iframe>

                                    <!-- END OF ANALOG CLOCK-->

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <!--<i class="now-ui-icons location_compass-05"></i>Current local time-->
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
