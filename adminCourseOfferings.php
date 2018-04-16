<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../../mysql_connect.php');
    session_start();
    
    if(isset($_POST['expand']))
    {
        $_SESSION['id'] = $_POST['expand'];
        header('Location: adminEditCourseOfferings.php');
    }
    
    if(isset($_POST['search']))
    {
        $course = $_POST['search'];
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
                <a  class="simple-text logo-mini">
                    <img src="../assets/img/logo.png" />
                </a>
                <a class="simple-text logo-normal">
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
                              <a href="adminViewAccounts.php">
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
                     
                    </div>
                       <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
                            <div class="input-group no-border">
                                <input type="text" name = "search" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold" style="color:#141E30"></i>
                                </span>
                            </div>
                        </form>
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
<form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>";
    


      <?php
		echo '<br> <div>
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">View Course Offerings</h4>
                                <br>
                            </div>


                            <div class="card-body">
                                <center>
                                    <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th> </th>
                                            <th>Course Code</th>
                                            <th>Section</th>
                                            <th>Name</th>
                                            <th>Day</th>
                                            <th>Time</th>
                                            <th>Room</th>
                                            <th>Instructor</th>
                                          </tr>
                                      </thead>';
                                        if(isset($course))
                                            $query="SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty WHERE course.c_code = '{$course}'";
                              
                                        else
                                            $query="SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty";
                                            
                                        $result=mysqli_query($dbc,$query);
                                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                            {  
                                                echo "<tr class='clickable-row'>
                                                </td>
                                                <td><div align = 'center'><button value ='".$row['c_id']."'class='btn btn-default' type = 'submit' name = 'expand'>Edit</button></div></td>
                                                <td >{$row['c_code']}</td>
                                                <td>{$row['c_section']}</td>
                                                <td>{$row['c_name']}</td>
                                                <td>{$row['c_day']}</td>
                                                <td>{$row['c_time']}</td>
                                                <td>{$row['c_room']}</td>
                                                <td>{$row['f_firstname']} {$row['f_lastname']}
                                                </tr>";
                                            }
                                    
                                       echo "
                                        </table>
                                </center>            
                            </div>
                        </div>
                    </div>
                </div>
		";
       ?> 
             </form>   
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
