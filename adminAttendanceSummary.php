<!DOCTYPE html>
<html lang="en">
<?php
    require_once('../../mysql_connect.php');
    session_start();
    
    $section = '0';
    
    if(isset($_POST['submit']))
    {
        if($_POST['college'] == 1)
            $section = 'CCS';
        else if($_POST['college'] == 2)
            $section = 'GCOE';
        else if($_POST['college'] == 3)
            $section = 'COS';
        else if($_POST['college'] == 4)
            $section = 'CLA';
        else if($_POST['college'] == 5)
            $section = 'COB';
        else if($_POST['college'] == 6)
            $section = 'SOE';
        else if($_POST['college'] == 7)
            $section = 'BAGCED';
        else if($_POST['college'] == 8)
            $section = 'STC';
        
    }
?>

 <script>
	function myFunction() {
    window.print();
	}
	</script>

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
                                <a href="adminViewAccounts2.php">
                            <i class="now-ui-icons business_badge"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li >
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
                        <a class="navbar-brand"><font color="#141E30">Attendance Summary</font></a>
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
            
            <form class="form-horizontal" method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                <div class = "form-inline" align = "right">
        
                                    
                                <select class='form-control col-sm-2' name = 'college'>
                                <option value = 0>Choose a college...</option>
                                <option value = 1>College of Computer Studies</option>
                                <option value = 2>Gokongwei College of Engineering</option>
                                <option value = 3>College of Science</option>
                                <option value = 4>College of Liberal Arts</option>
                                <option value = 5>College of Business</option>
                                <option value = 6>School of Economics</option>
                                <option value = 7>College of Education</option>
                                <option value = 8>Science and Technology Complex</option></select>&nbsp;<button type = "submit" name = "submit" class = "btn btn-info">OK</button><br>
                                </div>    
                                <div class="table-responsive">
                                    <table class="table table-hover">
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
                                                <b>Unscheduled Courses</b>
                                            </th>
                                        </thead>
                                        <tbody>
                                       <?php
    
                                         if($section != '0')
                                             $mainQuery = "SELECT * from faculty LEFT JOIN department ON department.d_id = faculty.f_dept LEFT JOIN college ON college.cl_id = department.d_college WHERE college.cl_code = '{$section}'";
                                         
                                         else
                                            $mainQuery = "SELECT * from faculty LEFT JOIN department ON department.d_id = faculty.f_dept LEFT JOIN college ON college.cl_id = department.d_college";
                  
                                         $mainResult = mysqli_query($dbc,$mainQuery);
                                         while($mainRow=mysqli_fetch_array($mainResult,MYSQLI_ASSOC))
                                         {
                                             $ab = 0; $la = 0; $ed = 0;
                                             $sb = 0; $sw= 0; $vr =0;
                                             $us = 0;
                                             
                                             $id = $mainRow['f_id'];
                                             $query = "SELECT * from course LEFT JOIN faculty ON faculty.f_id = course.c_faculty LEFT JOIN department ON department.d_id = faculty.f_dept LEFT JOIN college ON college.cl_id = department.d_college LEFT JOIN attendance ON attendance.a_course = course.c_id WHERE faculty.f_id = '{$id}'";
                                             $result=mysqli_query($dbc,$query);
                                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                             {  

                                                

                                                if($row['a_status'] == "AB")
                                                $ab++;

                                                if($row['a_status'] == "LA")
                                                    $la++; 

                                                if($row['a_status'] == "ED")
                                                    $ed++;

                                                if($row['a_status'] == "SB")
                                                    $sb++;

                                                if($row['a_status'] == "SW")
                                                    $sw++;


                                                if($row['a_status'] == "US")
                                                    $us++;
                                                    
                                            }
                                             echo "<tr class='clickable-row'>
                                                    <td >{$mainRow['f_firstname']} {$mainRow['f_lastname']}</td>
                                                    <td>{$mainRow['cl_code']}</td>
                                                    <td>{$mainRow['d_name']}</td>";
                                                    echo "<td>{$ab}</td>
                                                    <td>{$la}</td>
                                                    <td>{$ed}</td>
                                                    <td>{$sb}</td>
                                                    <td>{$sw}</td>
                                                    <td>{$us}</td>
                                                    </tr>";
                                             }
                                         
                                            
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                </center>
                                <button  onclick="myFunction()" class="btn btn-danger" value="Print" style="height:32px;width:78px;float: right">Print</button><br>
                            </div>
                        </div>
                    </div>
                </div>
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
