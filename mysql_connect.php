<?php
// PHP-MYSQL Initialize Database Connection
// FORMAT: mysqli_connect('SERVER','USER','PASSWORD','DATABASE');

$con = mysqli_connect('localhost','root',null,'sw-engg');

// PHP-MYSQL Check Database Connection
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}
?>
