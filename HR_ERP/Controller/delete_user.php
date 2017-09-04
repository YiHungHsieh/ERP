<?php
    
    require 'conn.php';
    // sql to delete a record
    $sql = "DELETE FROM `employees` WHERE e_sn='" . $_GET["e_sn"] . "'";

    mysqli_query($conn,$sql);
    header("Location:admin_editEmployee.php");
    

?>
