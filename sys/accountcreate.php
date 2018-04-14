<?php session_start();?>

<?php
    require_once("../sys/connect.php");

    //Properties
    $u_firstname =  ($_POST['u_firstname']);
    $u_lastname =  ($_POST['u_lastname']);
    $u_address =  ($_POST['u_address']);
    $u_contactno = $_POST['u_contactno'];
    $u_username =  ($_POST['u_username']);
    $u_password = ($_POST["u_password"]);
    $u_email =  ($_POST['u_email']);
    $u_type =  strtolower($_POST['u_type']);
/* $check = getimagesize($_FILES["image"]["tmp_name"]); if($check !== false){ $image = $_FILES['image']['tmp_name']; $imgContent = addslashes(file_get_contents($image));*/

    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
    $location=$_FILES["image"]["name"];

    //Queries
    $sqldata = "";

    if($u_type === "admin"){
        $sqldata = "INSERT INTO user (u_username, u_password, u_type, u_status, u_firstname, u_lastname, u_contactno, u_email, u_address,u_image) 
        VALUES ('$u_username','$u_password','1','1','$u_firstname','$u_lastname','$u_contactno','$u_email','$u_address','$location')";
    }else if($u_type ==="tracker"){
        $sqldata = "INSERT INTO user (u_username, u_password, u_type, u_status, u_firstname, u_lastname, u_contactno, u_email, u_address,u_image) 
        VALUES ('$u_username','$u_password','2','2','$u_firstname','$u_lastname','$u_contactno','$u_email','$u_address','$location')";
    }

    if(isset($sqldata)){
        $query = mysqli_query($con,$sqldata) or die(mysqli_error($con));
        echo $query;
    }

    header("Location: "."../sys/adminCreateAccount.php");
    //add notif that an account has been created
?>
