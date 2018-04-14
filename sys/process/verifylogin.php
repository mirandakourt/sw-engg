<?php session_start();?>

<?php
    if(isset ($_POST["u_username"]) && isset ($_POST["u_password"])){

         //Properties
         $u_username = $_POST["u_username"];
         /*$password = hash('sha512',$_POST["password"]);*/
        $u_password = $_POST["u_password"];
        
         //Queries  
         require_once("../../sw-engg/sys/connect.php");
        
         //STRING INTERPOLATION
         $sqldata = "SELECT u_username,u_password FROM user WHERE u_username='$u_username' and u_password = '$u_password';";
         //$sqldata2 = "SELECT username,password FROM client WHERE username='$username' and password = '$password';";

         $query = mysqli_query($con,$sqldata);
         $query2 = mysqli_query($con,$sqldata2);
         
        
        
         if (mysqli_num_rows($query)==1){
            header('Location: '. "../../sw-engg/sys/loginsuccess_view.php"); //admin page
            $_SESSION["u_username"]=$u_username;
            $_SESSION['home'] = "../../sw-engg/sys/loginsuccess_view.php";
            $_SESSION['u_type']="1";
         }else if (mysqli_num_rows($query2)==1){
            header('Location: '. "../system/loginsuccess_view.php"); //tracker page
            $_SESSION["u_username"]=$u_username;
            $_SESSION['home'] = "../system/loginsuccess_view.php";
            $_SESSION['u_type']="2";    
         }else{
            header('Location: '."../system/loginPage.php"); //go back to login
            $_SESSION["errorlogin"]="Authentication failed. Please try again.";
         }
    }
?>
