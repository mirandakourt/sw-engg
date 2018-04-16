<?php
require_once('../../mysql_connect.php');

		if(isset($_GET['rowID'])){
				$Status="";
				$rowID=$_GET['rowID'];
				$query="SELECT u_status FROM sw_engg.user where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$Status=$row["u_status"];
			}
			if($Status=='Activated'){
				$query="UPDATE user 
						SET u_status='Deactivated'
						where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
				header('location: adminViewAccounts2.php');
				
			}
			else
			{
				$query="UPDATE user 
						SET u_status='Activated'
						where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
				header('location: adminViewAccounts2.php');
			}
		}
?>

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
                    <li class="active">
                                <a href="adminViewAccounts2.php">
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
                <
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
                        <a class="navbar-brand"><font color="#141E30">Accounts</font></a>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="color:#01703D">
                                           
                                            <th>
                                                <b>Username</b>
                                            </th>
                                         
                                            <th>
                                                <b>Status</b>
                                            </th>
                                             <th>
                                                <b>Manage</b>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php
		    $query="SELECT u_id,u_username, u_status
					FROM user
					ORDER BY u_username;";
			$result=mysqli_query($dbc,$query);
			$rowID=1;
				foreach($result as $user){
					echo '<tr>';
				
				
					echo '<td>';
					echo $user['u_username'];
					echo '</td>';
					echo '<td>';
					echo $user['u_status'];
					echo '</td>';
					echo '<td>';
					echo "<a href='adminViewAccounts2.php?rowID=".$rowID."'><button value = ".$rowID." onclick = 'reactivateAccount()' name='activate'
					".(($user['u_status']=='Activated')? "disabled":"").">
						Activate</button></a>";
					echo "<a href='adminViewAccounts2.php?rowID=".$rowID."'><button value = ".$rowID." onclick = 'deactivateAccount()' name='deactivate'"
						.(($user['u_status']=='Deactivated')? "disabled":"").">
						Deactivate</button></a>";
					echo '</td>';
					echo '</tr>';
					$rowID++;
				}
			
		
		?>
                                        </tbody>
                                    </table>
                                </div>
                                
                                 <div class="row">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href= "adminCreateAccount.php"> <button type="button" class="btn btn-warning" style="align: right;background-color:#2d8911">ADD ACCOUNT </button></a>
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
function reactivateAccount() {
    var txt;
    if (confirm("Are you sure you wish to proceed?")) {
        txt = "Account has been reactivated!";
    } 
    document.getElementById("demo").innerHTML = txt;
}
</script>
    
<script>
function deactivateAccount() {
    var txt;
    if (confirm("Are you sure you wish to proceed?")) {
        txt = "Account has been deactivated!";
    } 
    document.getElementById("demo").innerHTML = txt;
}
</script>
  <script alert("Confirm Action");></script>
</html>
