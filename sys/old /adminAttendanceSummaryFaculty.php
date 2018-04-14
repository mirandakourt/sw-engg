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
                    <li class="active">
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
                        <a class="navbar-brand" href="adminAttendanceSummaryFaculty.php"><font color="#141E30">Attendance Summary - Faculty</font></a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:#01703D">
                                            <th>
                                                <b>Name</b>
                                            </th>
                                            <th>
                                                <b>College</b>
                                            </th>
                                            <th>
                                                <b>Department</b>
                                            </th>
                                            <th>
                                                <b>ABS</b>
                                            </th>
                                            <th>
                                                <b>LATES</b>
                                            </th>
                                            <th>
                                                <b>EDS</b>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Barnes, J.
                                                </td>
                                                <td>
                                                    CCS
                                                </td>
                                                <td>
                                                    CT
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    6
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carter, M.
                                                </td>
                                                <td>
                                                    CLA
                                                </td>
                                                <td>
                                                    ISD
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    0
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Maximoff, W.
                                                </td>
                                                <td>
                                                    COE
                                                </td>
                                                <td>
                                                    ECE
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    4
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Potts, P.
                                                </td>
                                                <td>
                                                    COB
                                                </td>
                                                <td>
                                                    MFI
                                                </td>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    0
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Rhodes, J.
                                                </td>
                                                <td>
                                                    CED
                                                </td>
                                                <td>
                                                    CEPD
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    12
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Rogers, S.
                                                </td>
                                                <td>
                                                    CED
                                                </td>
                                                <td>
                                                    CEPD
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    12
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="adminAttendanceSummaryFacultyID.php" style="color:#01703D">Stark, T.</a>
                                                </td>
                                                <td>
                                                    COE
                                                </td>
                                                <td>
                                                    ECE
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    4
                                                </td>    
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="adminAttendanceSummary.php" style="color:#FFF"><button type="button" class="btn btn-default" style="float:left">BACK TO ATTENDANCE SUMMARY</button></a>
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
