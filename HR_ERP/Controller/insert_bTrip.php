<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$timezone="Asia/Taipei";
date_default_timezone_set($timezone);

$b_sn=$_SESSION['id'];
$b_name=$_SESSION['name'];
$b_startDate=$_POST['b_startDate'];
$b_startTime=$_POST['b_startTime'];
$b_endDate=$_POST['b_endDate'];
$b_endTime=$_POST['b_endTime'];
$b_totalTime=$_POST['b_totalTime'];
$b_location=$_POST['b_location'];
$b_state=$_POST['b_state'];
$b_comment=$_POST['b_comment'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tt=strtotime($b_startDate);
    $appM=date("n",$tt);

    $sql = "INSERT INTO business (b_month,b_sn,b_name,b_startDate,b_startTime,b_endDate,b_endTime,b_totalTime,b_location,b_state,b_comment)
    VALUES ('$appM','$b_sn','$b_name','$b_startDate','$b_startTime','$b_endDate','$b_endTime','$b_totalTime','$b_location','$b_state','$b_comment');";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location:../user-Model/user_bTrip_list.php");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
