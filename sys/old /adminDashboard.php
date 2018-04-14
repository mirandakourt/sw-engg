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
                        <a href="adminDashboard.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="adminUserProfile.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="adminAccounts.php">
                            <i class="now-ui-icons business_badge"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li>
                        <a href="adminCourseOfferings.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Course Offerings</p>
                        </a>
                    </li>
                    <li>
                        <a href="adminAttendanceSummary.php">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Attendance Summary</p>
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
                        <a class="navbar-brand" href="adminDashboard.php"><font color="#141E30">Dashboard</font></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold" style="color:#141E30"></i>
                                </span>
                            </div>
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
                                    <a class="dropdown-item" href="http://www.dlsu.edu.ph" style="color:#141E30">Website</a>
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
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Today is</h5>
                                <h4 class="card-title">
                                
<!-- START OF DATE SCRIPT-->
                                    
<script type="text/javascript">
var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
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
                    <div class="col-lg-8">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Read before dismissing</h5>
                                <h4 class="card-title">Notifications</h4>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item text-danger" href="#">Clear notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>
                                        <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>
                                        <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                                </div>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>
                                        <b> Success - </b> This is a regular notification made with ".alert-success"</span>
                                </div>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>
                                        <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                                </div>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>
                                        <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
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
