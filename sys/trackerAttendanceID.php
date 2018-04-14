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
                        <a class="navbar-brand" href="trackerAttendanceID.php"><font color="#141E30">Attendance  - Rogers, S.</font></a>
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
			<?php
			$connect = mysqli_connect('localhost','root','Sm!th2345','swengg');

			if (!$connect) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			?>
            <br><br><br><br><br>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-user">
                                    <br><br><br><br>
                                <div class="author">
								<?php 
									$sql = "SELECT f_firstname from faculty where f_id = '1' ";
									$sql2 = "SELECT f_lastname from faculty where f_id = '1' ";
									$result = mysqli_query($connect,$sql);
									$result2 = mysqli_query($connect,$sql2);
									$row = mysqli_fetch_assoc($result);
									$row2 = mysqli_fetch_assoc($result2);
									
								?>
                                    <img class="avatar border-gray" src="../assets/img/steve.jpg" alt="...">
                                     <h5 class="title" style="color:#01703D"><?php echo $row['f_firstname']?></h5> 
									 
                                    <p class="description text-center" style="color:#000">
                                        FULL-TIME PROFESSOR
                                        <br>
                                        Information Technology Department
                                        <br>
                                        College of Computer Studies
                                    </p>
                                    <hr>
                                </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <center>    
                                     
                                    </center>
                                <p class="title" style="color:#000;text-align:center">MONDAY & WEDNESDAY CLASSES</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:#01703D">
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
                                                <b>Room</b>
                                            </th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php $sql = "SELECT c_code FROM course WHERE c_day ='WF' && c_faculty = '1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_code'];
													?>
                                                </td>
                                                <td>
                                                   <?php $sql = "SELECT c_section FROM course WHERE c_day ='WF' && c_faculty = '1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_section'];
													?> 
                                                </td>
                                                <td>
                                                    <?php $sql = "SELECT c_time FROM course WHERE c_day ='WF' && c_faculty = '1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_time'];
													?>
                                                </td>
                                                <td>
                                                    <?php $sql = "SELECT c_room FROM course WHERE c_day ='WF' && c_faculty = '1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_room'];
													?>
                                                </td>
                                            
                
                                            </tr>
											<tr>
                                                <td>
                                                    <?php $sql = "SELECT c_code FROM course WHERE c_day ='WF' && c_faculty = '1' && c_id !='1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_code'];
													?>
                                                </td>
                                                <td>
                                                   <?php $sql = "SELECT c_section FROM course WHERE c_day ='WF' && c_faculty = '1'&& c_id !='1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_section'];
													?> 
                                                </td>
                                                <td>
                                                    <?php $sql = "SELECT c_time FROM course WHERE c_day ='WF' && c_faculty = '1'&& c_id !='1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_time'];
													?>
                                                </td>
                                                <td>
                                                    <?php $sql = "SELECT c_room FROM course WHERE c_day ='WF' && c_faculty = '1'&& c_id !='1'";
														  $result = mysqli_query($connect,$sql);
														  $row = mysqli_fetch_assoc($result);
														  
														  echo $row['c_room'];
													?>
                                                </td>
                                            
                
                                            </tr>
                                           <!-- <tr>
                                                <td>
                                                    ENGLCOM
                                                </td>
                                                <td>
                                                    S12
                                                </td>
                                                <td>
                                                    9:15 - 10:45
                                                </td>
                                                <td>
                                                    AG904
                                                </td>
                                         
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    ITORMGT
                                                </td>
                                                <td>
                                                    S15
                                                </td>
                                                <td>
                                                    11:00 - 12:30
                                                </td>
                                                <td>
                                                    G208
                                                </td>
                                               
                                            
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                                <p class="title" style="color:#000;text-align:center">TUESDAY & THURSDAY CLASSES</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:#01703D">
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
                                                <b>Room</b>
                                            </th>
                                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    SCIENVP
                                                </td>
                                                 <td>
                                                    A51
                                                </td>
                                                <td>
                                                    12:45 - 14:15
                                                </td>
                                                <td>
                                                    J210
                                                </td>
                                            
                                            </tr>
                                            <tr>
                                                <td>
                                                    GREATWK
                                                </td>
                                                <td>
                                                    C35
                                                </td>
                                                <td>
                                                    14:30 - 16:00 
                                                </td>
                                                <td>
                                                    V206
                                                </td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                               
                                </div>
                                <a href="trackerAttendance.php" style="color:#FFF"><button type="button" class="btn btn-default" style="float:left">BACK</button></a>
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
