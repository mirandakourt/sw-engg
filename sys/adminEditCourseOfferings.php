<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../../mysql_connect.php');
    session_start();
    $id = $_SESSION['id'];
    
    if(isset($_POST['edit']))
    {
        $day = $_POST['day'];
        $time = $_POST['time'];
        $room = $_POST['room'];
        $faculty = $_POST['faculty'];
        
        $query="UPDATE course SET c_day = '{$day}' WHERE c_id = ".$_SESSION['id'];
        $result=mysqli_query($dbc,$query);
        
        $query="UPDATE course SET c_time = '{$time}' WHERE c_id = ".$_SESSION['id'];
        $result=mysqli_query($dbc,$query);
        
        $query="UPDATE course SET c_room = '{$room}' WHERE c_id = ".$_SESSION['id'];
        $result=mysqli_query($dbc,$query);
        
        $query="UPDATE course SET c_faculty = '{$faculty}' WHERE c_id = ".$_SESSION['id'];
        $result=mysqli_query($dbc,$query);
        
        header('Location: adminCourseOfferings.php');
    }
?>
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
                    <li class="active">
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
                        <a class="navbar-brand" href="adminEditCourseOfferings.php"><font color="#141E30">Edit Course Offerings</font></a>
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
                                    <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
                                    <?php
                                        $query = "select * from course WHERE c_id = {$id}";
                                        $result = mysqli_query($dbc, $query);
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        echo "<h4>".$row['c_code']." - ".$row['c_section'];
                                        echo "<br>".$row['c_name']."</h4>";
                                        echo '<div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Day</label>
                                                <input type="text" name = "day" class="form-control" value ='.$row['c_day'].'>
                                            </div>
                                        </div>';
                                        echo '<div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Time</label>
                                                <input type="text" name = "time" class="form-control" value='.$row['c_time'].'>
                                            </div>
                                        </div>';
                                        echo '<div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Room</label>
                                                <input type="text" name = "room" class="form-control" value = '.$row['c_room'].'>
                                            </div>
                                        </div>';
                                          
                                        echo '<div class="col-md-6 pr-1">
                                              <div class="form-group">
                                              <label>Faculty</label>
                                              <select id="selectDish" name="faculty" class="form-control">';
                                        $query1="select * from faculty";
                                        $result1=mysqli_query($dbc,$query1);
                                        while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                                            echo "<option value={$row1['f_id']}>{$row1['f_firstname']} {$row1['f_lastname']}</option>";
                                        echo '</select></div></div>';
                                          
                                        echo ' <div class="row">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" name = "edit" onclick = "myFunction()" class="btn btn-warning" style="align: right;">EDIT</button>
                                        </div>';
                                    ?>
                                    </form>
                                </div>
                                <a href="adminCourseOfferings.php" style="color:#FFF"><button type="button" class="btn btn-default" style="float:left">BACK TO COURSE OFFERINGS</button></a>
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
<button onclick="myFunction()">Try it</button>
<script>
function myFunction() {
    alert("Changes recorded successfully!");
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
