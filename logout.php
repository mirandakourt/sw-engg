<?php 
session_start();
session_destroy();
header("Location: "."../sys/loginPage.php"); //main page
?>
