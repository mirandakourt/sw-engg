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
                        <a class="navbar-brand">
                            <font color="#141E30">Add Faculty</font>
                        </a>
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
                            <div class="card-header">
                                <h5 class="title">Add Faculty</h5>
                            </div>
                            <div class="card-body">
                                <form action="../sys/insertFaculty.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" id="firstname" name="f_firstname" class="form-control" placeholder="First Name" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" id="lastname" name="f_lastname" class="form-control" placeholder="Last Name" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" id="address" name="f_address" class="form-control" placeholder="Home Address" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" id="contact" name="f_contactno" class="form-control" placeholder="Contact" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" id="email" name="f_email" class="form-control" placeholder="E-mail" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select name="f_dept" id="dept" class="form-control" required>
                                                    <option value="" disabled selected>Select Department</option>
                                                    <option name="f_dept" value="1">Accountancy</option>
                                                    <option name="f_dept" value="2">Law</option>
                                                    <option name="f_dept" value="3">Economics</option>
                                                    <option name="f_dept" value="4">Educational Leadership and Management</option>
                                                    <option name="f_dept" value="5">Biology</option>
                                                    <option name="f_dept" value="6">Chemistry</option>
                                                    <option name="f_dept" value="7">Chemical Engineering</option>
                                                    <option name="f_dept" value="8">Manufacturing Engineering and Management</option>
                                                    <option name="f_dept" value="9">Communication</option>
                                                    <option name="f_dept" value="10">Literature</option>
                                                    <option name="f_dept" value="11">Information Technology</option>
                                                    <option name="f_dept" value="12">Software Technology</option>
                                                    <option name="f_dept" value="13">Computer Technology</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Rank</label>
                                                <select name="f_rank" id="rank" class="form-control" required>
                                                    <option value="" disabled selected>Select Rank</option>
                                                    <option name="f_rank" value="1">Full Professor</option>
                                                    <option name="f_rank" value="2">Assistant Professor</option>
                                                    <option name="f_rank" value="3">Associate Professor</option>
                                                    <option name="f_rank" value="4">Lecturer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-default" style="float:left" onclick="cancel();">CANCEL</button>
                                    <input id="submitme" class="btn btn-warning" type="submit" style="float:right" value="ADD ACCOUNT" onclick="return trial();"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid ">
                    <div class="copyright ">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())

                        </script>, Designed by
                        <a href="https://www.invisionapp.com " target="_blank " style="color:#01703D ">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com " target="_blank " style="color:#01703D ">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js "></script>
<script src="../assets/js/core/popper.min.js "></script>
<script src="../assets/js/core/bootstrap.min.js "></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js "></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE "></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js "></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js "></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1 "></script>

<script>
function createAccount() {
    var txt;
    if (confirm("Are you sure you wish to add this account?")) {
        window.location.href = "../sys/insertFaculty.php";
    }
    else {
        return false;	
    }
}
function cancel() {
    var txt;
    if (confirm("Are you sure you want to discard creating this acccount?")) {
        window.location.href = "addFaculty.php";
    }
}
    
function trial(){
	
	firstname = document.getElementById("firstname").value;
    lastname = document.getElementById("lastname").value;
    address = document.getElementById("address").value;
    contact = document.getElementById("contact").value;
    email = document.getElementById("email").value;
    dept = document.getElementById("dept").value;
    rank = document.getElementById("rank").value;
	
	if(firstname != '' && lastname!='' && address!='' && contact!='' && email!='' && dept!='' && rank!=''){
		return confirm("Are you sure you wish to create this account?");
	}
	else{
		alert("You have not provided the needed details. Please try again.");
		return false;	
	}
	
}
</script>

</html>
