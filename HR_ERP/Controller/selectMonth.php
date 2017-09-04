<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "peopleresource";
 $timezone="Asia/Taipei";

 date_default_timezone_set($timezone);

 $conn = mysqli_connect($servername,$username ,$password,$dbname);
    $sql = "SELECT * FROM `leave`";

    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    $time=strtotime($row['l_startDate']);
    $date=date('m',$time);
    echo $date;
 ?>
