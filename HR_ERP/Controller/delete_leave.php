<?php
    
    require 'conn.php';
    // sql to delete a record
    $sql = "DELETE FROM `leave` WHERE id='" . $_GET["id"] . "'";

    mysqli_query($conn,$sql);
    header("Location:admin_leave.php");

?>