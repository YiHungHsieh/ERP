<?php session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$name=$_SESSION['name'];
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
    // sql to delete a record
    $sql = "UPDATE message SET businessMsg='',overTimeMsg='',leaveMsg='',returnBusinessMsg='',returnOvertimeMsg='',returnLeaveMsg='' WHERE name='$name'";
    $result=mysqli_query($conn,$sql);
   
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>