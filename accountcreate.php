<?php session_start();?>

<?php
    require_once("../sys/connect.php");

    //Properties
    $u_username =  ($_POST['u_username']);
    $u_password = ($_POST["u_password"]);

    //Queries
    $sqldata = "";

$query1 = mysqli_query($con,"SELECT u_username FROM user WHERE u_username='$u_username'");

  if (mysqli_num_rows($query1) != 0)
  {
      echo "<script>
    alert('Username already exists. Please try again.');
    window.location.href='../sys/adminViewAccounts2.php';
    </script>";
  }

  else
  {
    $sqldata = "INSERT INTO user (u_username, u_password,u_type,u_status)
        VALUES ('$u_username','$u_password','2','ACTIVATED')";

    if(isset($sqldata)){
        $query = mysqli_query($con,$sqldata) or die(mysqli_error($con));
        echo $query;
    }
      echo "<script>
    alert('Tracker account has been created!');
    window.location.href='../sys/adminViewAccounts2.php';
    </script>";
  }
    
?>
