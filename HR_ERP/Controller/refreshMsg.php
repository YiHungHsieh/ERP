<?php session_start();
    
    require 'conn.php';
    $name=$_SESSION['name'];

    // sql to delete a record
    $sql = "UPDATE message SET businessMsg='',overTimeMsg='',leaveMsg='',returnBusinessMsg='',returnOvertimeMsg='',returnLeaveMsg='' WHERE name='$name'";
    $result=mysqli_query($conn,$sql);
   
?>