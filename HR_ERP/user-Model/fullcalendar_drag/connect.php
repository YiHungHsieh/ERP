<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$timezone="Asia/Taipei";

 $conn = mysqli_connect($servername,$username ,$password,$dbname);

date_default_timezone_set($timezone); 
?>
