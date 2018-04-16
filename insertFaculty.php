<?php session_start();?>

<?php
    require_once("../sys/connect.php");

    //Properties
    $f_firstname =  ($_POST['f_firstname']);
    $f_lastname =  ($_POST['f_lastname']);
    $f_address =  ($_POST['f_address']);
    $f_contactno = $_POST['f_contactno'];
    $f_email =  ($_POST['f_email']);
    $f_dept =  ($_POST['f_dept']);
    $f_rank = ($_POST['f_rank']);

    //Queries
    $sqldata = "";
    $query1 = mysqli_query($con,"SELECT f_email FROM faculty WHERE f_email='$f_email'");

  if (mysqli_num_rows($query1) != 0)
  {
      echo "<script>
    alert('Email address already exists. Please try again.');
    window.location.href='../sys/addFaculty.php';
    </script>";
  }

else {
    $sqldata = "INSERT INTO faculty (f_firstname, f_lastname, f_address, f_contactno, f_email, f_dept, f_rank)
    VALUES ('$f_firstname','$f_lastname','$f_address','$f_contactno','$f_email','$f_dept','$f_rank')";


    if(isset($sqldata)){
        $query = mysqli_query($con,$sqldata) or die(mysqli_error($con));
        echo $query;
    }
    
     echo "<script>
    alert('Faculty has been added!');
    window.location.href='../sys/addFaculty.php';
    </script>";

}

?>
