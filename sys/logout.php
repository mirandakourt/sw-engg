<?php 
session_start();
session_destroy();
header("Location: "."../sw-engg/sys/loginPage.php"); //main page
?>
