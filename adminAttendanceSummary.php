<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../../mysql_connect.php');
    session_start();
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
                <a class="simple-text logo-mini">
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
                                                <b>Absents</b>
                                            </th>
                                            <th>
                                                <b>Lates</b>
                                            </th>
                                            <th>
                                                <b>Early Dismissals</b>
                                            </th>
                                             <th>
                                                <b>Substitutes</b>
                                            </th>
                                            <th>
                                                <b>Seatworks</b>
                                            </th>
                                            <th>
                                                <b>Vacant Room</b>
                                            </th>
                                            <th>
                                                <b>Unscheduled Courses</b>
                                            </th>
                                        </thead>
                                        <tbody>
                                       <?php
                                         $query = "SELECT * from course LEFT JOIN faculty ON faculty.f_id = course.c_faculty LEFT JOIN department ON department.d_id = faculty.f_dept LEFT JOIN college ON college.cl_id = department.d_college LEFT JOIN attendance ON attendance.a_course = course.c_id LEFT JOIN attendance_status ON attendance_status.as_id = attendance.a_status";
                                         $result=mysqli_query($dbc,$query);
                                         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                         {  
                                             
                                            $ab = 0; $la = 0; $ed = 0;
                                            $sb = 0; $sw= 0; $vr =0;
                                            $us = 0;
                                             
                                            if($row['as_id'] == "1")
                                                $ab++;
                                             
                                            if($row['as_id'] == "2")
                                                $la++; 
                                             
                                            if($row['as_id'] == "3")
                                                $ed++;
                                             
                                            if($row['as_id'] == "4")
                                                $sb++;
                                             
                                            if($row['as_id'] == "5")
                                                $sw++;
                                             
                                            if($row['as_id'] == "6")
                                                $vr++;
                                             
                                            if($row['as_id'] == "7")
                                                $us++;
                                             
                                            $next = intval($row['c_id']) + 1;
                                            $query1 = "SELECT * from course LEFT JOIN faculty ON faculty.f_id = course.c_faculty LEFT JOIN department ON department.d_id = faculty.f_dept LEFT JOIN college ON college.cl_id = department.d_college LEFT JOIN attendance ON attendance.a_course = course.c_id LEFT JOIN attendance_status ON attendance_status.as_id = attendance.a_status WHERE c_id = {$next}";
                                            $result1=mysqli_query($dbc,$query1);
                                            $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                            if($row1 ['f_id'] == $row['f_id'])
                                            {
                                                
                                            }
                                            else
                                            {
                                                echo "<tr class='clickable-row'>
                                                <td >{$row['f_firstname']} {$row['f_lastname']}</td>
                                                <td>{$row['cl_code']}</td>
                                                <td>{$row['d_name']}</td>";
                                                echo "<td>{$ab}</td>
                                                <td>{$la}</td>
                                                <td>{$ed}</td>
                                                <td>{$sb}</td>
                                                
                                                <td>{$sw}</td>
                                                
                                                <td>{$vr}</td>
                                                
                                                <td>{$us}</td>
                                                </tr>";
                                            }
                                         }
                                            
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
