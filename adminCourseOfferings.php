<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../mysql_connect.php');
    session_start();
    
    $queryCheck = "SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty";
    $resultCheck=mysqli_query($dbc,$queryCheck);
    while($rowCheck=mysqli_fetch_array($resultCheck,MYSQLI_ASSOC))
    {
        $button = $rowCheck['c_id'];
        if(isset($_POST[$button]))
        {
            $time = $_POST['T'.$rowCheck['c_id']];
            $day = $_POST['D'.$rowCheck['c_id']];
            $room = $_POST['R'.$rowCheck['c_id']];
            $prof = $_POST['P'.$rowCheck['c_id']];
            
            if($prof != 0)
            {
                $query = "UPDATE course SET c_day = '{$day}', c_time = '{$time}', c_room = '{$room}', c_faculty = '{$prof}' WHERE c_id = '{$button}'";
                $result = mysqli_query($dbc,$query);
            }
            
            else
            {
                $query = "UPDATE course SET c_day = '{$day}', c_time = '{$time}', c_room = '{$room}' WHERE c_id = '{$button}'";
                $result = mysqli_query($dbc,$query);
            }
        }
    }
    
    if(isset($_POST['college']))
    {
        if($_POST['college'] == 1)
            $section = 'S%';
        else if($_POST['college'] == 2)
            $section = 'E%';
        else if($_POST['college'] == 3)
            $section = 'S%';
        else if($_POST['college'] == 4)
            $section = 'A%';
        else if($_POST['college'] == 5)
            $section = 'K%';
        else if($_POST['college'] == 6)
            $section = 'V%';
        else if($_POST['college'] == 7)
            $section = 'L%';
        else if($_POST['college'] == 8)
            $section = 'X%';
        else if($_POST['college'] == 0)
            $section = '0';
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
                        <a class="navbar-brand" href="adminCourseOfferings.php"><font color="#141E30">View and Edit Course Offerings</font></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                          
                        <ul class="navbar-nav">
                            <ul class="navbar-nav">
                               <li class="nav-item dropdown">
                                <a class="nav-link" href="loginPage.php" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                    Logout
                                    <i class="now-ui-icons arrows-1_minimal-right" style="color:#141E30"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <br><br><br><br>
            <div class="content">

                <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
                
                <br> <div>
                <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                <div class="card-header">
                <h4 class="card-title">Course Offerings</h4>
                <br>
                </div>
                <div class="card-body">
                <center>
                <select class='form-control col-sm-2' name = 'college'>
                <option value = 0>Choose a college...</option>
                <option value = 1>College of Computer Studies</option>
                <option value = 2>Gokongwei College of Engineering</option>
                <option value = 3>College of Science</option>
                <option value = 4>College of Liberal Arts</option>
                <option value = 5>College of Business</option>
                <option value = 6>School of Economics</option>
                <option value = 7>College of Education</option>
                <option value = 8>Science and Technology Complex</option></select><br>
                <input type="text" name = "search" class="form-control col-sm-2" placeholder="Search by course...">
                <br>
                    
      <?php

                                    echo '<table class="table table-hover">
                                      <thead style="color:#01703D">
                                          <tr> 
                                            <th><b>Code</b></th>
                                            <th><b>Section</b></th>
                                            <th><b>Name</b></th>
                                            <th><b>Day</b></th>
                                            <th><b>Time</b></th>
                                            <th><b>Room</b></th>
                                            <th><b>Instructor</b></th>
                                            <th> </th>
                                          </tr>
                                      </thead>';
                      
                                        if(isset($course) && $course != "")
                                        {
                                            $query="SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty WHERE course.c_code = '{$course}'";
                                        }
                      
                                        elseif(isset($section) && $course != '0')
                                        {
                                            $query="SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty WHERE course.c_section LIKE '{$section}'";
                                        }
                              
                                        else
                                        {
                                            $query="SELECT * FROM `course` LEFT JOIN faculty ON faculty.f_id = course.c_faculty";
                                        }
                                            
                                        $result=mysqli_query($dbc,$query);
                                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                            {  
                                                echo "<tr class='clickable-row'>
                                                
                                                <td >{$row['c_code']}</td>
                                                <td>{$row['c_section']}</td>
                                                <td>{$row['c_name']}</td>
                                                <td><input type='text' class='form-control' id='day' placeholder='".$row['c_day']."' value = '".$row['c_day']."' name = 'D".$row['c_id']."' maxlength = '3' style='width: 150px;' required></td>
                                                <td><input type='text' class='form-control' id='time' placeholder='".$row['c_time']."' value = '".$row['c_time']."' maxlength = '9' name = 'T".$row['c_id']."' style='width: 150px;' required></td>
                                                <td><input type='text' class='form-control' id='room' placeholder='".$row['c_room']."' value = '".$row['c_room']."' maxlength = '5' name = 'R".$row['c_id']."' style='width: 150px;' required></td>
                                                <td><center>{$row['f_firstname']} {$row['f_lastname']}<center><select class='form-control' name = 'P".$row['c_id']."'><option value = 0>Choose...</option>"; 
                                            
                                                $queryProf="SELECT * FROM `faculty`";
                                                $resultProf=mysqli_query($dbc,$queryProf);
                                                while($rowProf=mysqli_fetch_array($resultProf,MYSQLI_ASSOC))
                                                {
                                                    echo "<option value = {$rowProf['f_id']}>{$rowProf['f_firstname']} {$rowProf['f_lastname']}";
                                                }
                                            
                                                echo "</select></td><td><div align = 'center'><button name ='".$row['c_id']."'class='btn btn-default' type = 'submit'>Save</button></div></td>
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
