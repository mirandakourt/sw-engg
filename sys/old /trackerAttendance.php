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
                        <a href="trackerDashboard.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="trackerUserProfile.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="trackerAttendance.php">
                            <i class="now-ui-icons tech_watch-time"></i>
                            <p>Attendance</p>
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
                        <a class="navbar-brand" href="trackerAttendance.php"><font color="#141E30">Attendance</font></a>
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
                            <div class="card-header">
                                <p>
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
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:#01703D">
                                            <th>
                                                <b>Faculty</b>
                                            </th>
                                            <th>
                                             <b>Course</b>
                                            </th>
                                            <th>
                                                <b>Time</b>
                                            </th>
                                            <th>
                                                <b>Room</b>
                                            </th>
                                            <th>
                                                <b>ABS</b>
                                            </th>
                                            <th>
                                                <b>LATE</b>
                                            </th>
                                            <th>
                                                <b>ED</b>
                                            </th>
                                            <th>
                                                <b>Remarks</b>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="trackerAttendanceID.php" style="color:#01703D">Rogers, S.</a>
                                                </td>
                                                <td>
                                                    ARCPLAN
                                                </td>
                                                <td>
                                                    7:30 - 9:00
                                                </td>
                                                <td>
                                                    G204
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td>    
                                            </tr>
                                            <tr>
                                                <td>
                                                    Maximoff, W.
                                                </td>
                                                <td>
                                                    ENGLCOM
                                                </td>
                                                <td>
                                                    9:15 - 10:45
                                                </td>
                                                <td>
                                                    AG904
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td>
                                                    Barnes, J.
                                                </td>
                                                <td>
                                                    ITORMGT
                                                </td>
                                                <td>
                                                    11:00 - 12:30
                                                </td>
                                                <td>
                                                    G208
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td>
                                                    Stark, T.
                                                </td>
                                                <td>
                                                    SCIENVP
                                                </td>
                                                <td>
                                                    12:45 - 14:15
                                                </td>
                                                <td>
                                                    J210
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carter, M.
                                                </td>
                                                <td>
                                                    GREATWK
                                                </td>
                                                <td>
                                                    14:30 - 16:00 
                                                </td>
                                                <td>
                                                    V206
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Potts, P.
                                                </td>
                                                <td>
                                                    HUMALIT
                                                </td>
                                                <td>
                                                    16:15 - 17:45
                                                </td>
                                                <td>
                                                    AG1709
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Rhodes, J.
                                                </td>
                                                <td>
                                                    SOCTEC2
                                                </td>
                                                <td>
                                                    18:00 - 19:30
                                                </td>
                                                <td>
                                                    G201
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="user" size="25" maxlength="30" value=""/>
                                                </td>  
                                                <td>
                                                    <input type="submit" name="activate" class="btn btn-primary btn-fill" value="SUBMIT" />
                                                </td>
                                            </tr>
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
