<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../../mysql_connect.php');
    session_start();
    
    if(isset($_POST['add']))
    {
        $code = $_POST['code'];
        $name = $_POST['name'];
        $section = $_POST['section'];
        $time = $_POST['time'];
        $day = $_POST['day'];
        $room = $_POST['room'];
        $prof = $_POST['prof'];
        $college = $_POST['college'];
        
        $query = "INSERT INTO course (c_code, c_name, c_section, c_time, c_day, c_room, c_faculty, c_college) VALUES ('{$code}', '{$name}', '{$section}', '{$time}', '{$day}', '{$room}', '{$prof}', '{$college}')";
        $result = mysqli_query($dbc, $query);
    }
    
    if(isset($_POST['cancel']))
    {
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
                        <a href="adminUserProfile.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li>
                                <a href="adminViewAccounts2.php">
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
                    <li >
                        <a href="adminAttendanceSummary.php">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Attendance Summary</p>
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
                        <a class="navbar-brand" href="adminCourseOfferings.php"><font color="#141E30">Add Course</font></a>
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
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input type="text" maxlength = "7" class="form-control" placeholder="Course Code" name = "code">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Course Name</label>
                                            <input type="text" class="form-control" placeholder="Course Name" name = "name">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Course Section</label>
                                            <input type="text" class="form-control" placeholder="Course Section" name = "section">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Schedule</label>
                                            <input type="text" class="form-control" placeholder="Schedule (WF, TH, etc.)" name = "day">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text" class="form-control" placeholder="Time (0730-0900, 0915-1045, etc.)" name = "time">
                                         </div>
                                    </div>
                                    
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Room</label>
                                            <input type="text" class="form-control" placeholder="Room (G201, V204, etc.)" name = "room">
                                         </div>
                                    </div>
                                    
                                    <?php
                                    
                                        echo "<div class='col-md-6 pr-1'><div class='form-group'><label>College</label>
                                        <select class='form-control' name = 'college'>"; 
                                            
                                        $query = "SELECT * FROM `college`";
                                        $result = mysqli_query($dbc,$query);
                                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                        {
                                            echo "<option value = {$row['cl_id']}>{$row['cl_name']}</option>";
                                        }
                                    
                                        echo "</select></div></div>";
                                    
                                        echo "<div class='col-md-6 pr-1'><div class='form-group'><label>Professor</label>
                                        <select class='form-control' name = 'prof'>"; 
                                            
                                        $query = "SELECT * FROM `faculty`";
                                        $result = mysqli_query($dbc,$query);
                                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                        {
                                            echo "<option value = {$row['f_id']}>{$row['f_firstname']} {$row['f_lastname']}</option>";
                                        }
                                    
                                        echo "</select></div></div>";
                                    
                                    ?>
                                    
                                        &nbsp;&nbsp;&nbsp;&nbsp;<button onclick="return addCourse();" class='btn btn-warning' name = "add">Add Course</button><button class='btn btn-danger' name = "cancel">Cancel</button><br>
                                 
                                    </form>       
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

<script>
function addCourse() {
    var txt;
    if (confirm("Are you sure you wish to add this course?")) {
        window.location.href = "adminCourseOfferings.php";
    }
    else {
        return false;	
    }
}

</script>
    
</html>
