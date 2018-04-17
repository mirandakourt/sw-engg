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
                <a  class="simple-text logo-mini">
                    <img src="../assets/img/logo.png" />
                </a>
                <a  class="simple-text logo-normal">
                    DE LA SALLE UNIVERSITY 
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    
                    <li class="active">
                        <a href="trackerUserProfile.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li>
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
                          <a class="navbar-brand">
                            <font color="#141E30">Change Password</font>
                        </a>
                    </div>
                   
                </div>
            </nav>
            <!-- End Navbar -->
           
                 
            <br><br><br><br><br>
            <div class="content">
                <div class="row">
                    
                    <div class="col-md-8">
                       
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                
                                  
                                   <?php
$connect = mysqli_connect('localhost','root', null,'sw-engg');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
if(isset($_SESSION['password']) && isset($_SESSION['username'])) {
    $oldPass=($_POST['oldPass']); 
    $Password=($_POST['password']);
    $passCheck=($_POST['passCheck']);
    
    if($_SESSION['password']==$oldPass)
    {
        $temp = $_SESSION['username'];
        if($Password==$passCheck){
            $query="UPDATE user 
                    SET user.u_password='$Password'
                    where u_username='$temp';"; //Change Query here for session
            $result=mysqli_query($connect,$query);
                echo "<script>";
                echo "alert('You changed your password!')";
                echo "</script>";
            unset($_POST['oldPass']);
            
            
            $_SESSION['password'] = $Password;
        }
        else
        {
            echo "<br>";
            echo "Passwords do not match!";
            unset($_POST['oldPass']);
        }
    }
    */
?>

<form action ="Chanepass3.php" method = "POST" >
  Old Password:<input type="password" placeholder = "<?php echo $_SESSION['password']; ?>" name="oldPass" placeholder="Old Password" required><br>
  <br>
  New Password:<input type="password" name="password" placeholder="New Password" required><br>
    <BR>
  Confirm New Password:<input type="password" name="passCheck" placeholder="Confirm" required><br>
        <br>
  <br><input type="submit" name="submission" id = "submitInput" value="Submit" >
                                
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
