<?php session_start();?>

<?php
    if(isset ($_POST["u_username"]) && isset ($_POST["u_password"])){

         //Properties
         $u_username = $_POST["u_username"];
         /*$password = hash('sha512',$_POST["password"]);*/
        $u_password = $_POST["u_password"];
        
         //Queries  
         require_once("../sys/connect.php");
        
         //STRING INTERPOLATION
         $sqldata = "SELECT u_type,u_username,u_password FROM user WHERE u_type='1' and u_username='$u_username' and u_password = '$u_password';";
         $sqldata2 = "SELECT u_type,u_username,u_password FROM user WHERE u_type='2' and u_username='$u_username' and u_password = '$u_password';";

         $query = mysqli_query($con,$sqldata);
         $query2 = mysqli_query($con,$sqldata2);
         
        
        
         if (mysqli_num_rows($query)==1){
            header('Location: '. "../sys/adminDashboard.php"); //admin page
            $_SESSION["u_username"]=$u_username;
            $_SESSION['home'] = "../sys/adminUserProfile.php";
            $_SESSION['u_type']="1";
         }else if (mysqli_num_rows($query2)==1){
            header('Location: '. "../sys/trackerDashboard.php"); //tracker page
            $_SESSION["u_username"]=$u_username;
            $_SESSION['home'] = "../sys/trackerTrackAttendance.php";
            $_SESSION['u_type']="2";    
         }else{
            header('Location: '."../sys/loginPage.php"); //go back to login
            $_SESSION["errorlogin"]="Authentication failed. Please try again.";
         }
    } 
?>
