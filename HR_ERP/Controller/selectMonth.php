<?php

    require 'conn.php';
    $timezone="Asia/Taipei";

    date_default_timezone_set($timezone);

    $sql = "SELECT * FROM `leave`";

    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    $time=strtotime($row['l_startDate']);
    $date=date('m',$time);
    echo $date;
 ?>
