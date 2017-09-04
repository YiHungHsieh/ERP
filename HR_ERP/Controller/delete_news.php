<?php
    
    require 'conn.php';
    // sql to delete a record
    $sql = "DELETE FROM news WHERE id='" . $_GET["id"] . "'";
    mysqli_query($conn,$sql);
    header("Location:../admin-Model/admin_editNews.php");
    
?>
