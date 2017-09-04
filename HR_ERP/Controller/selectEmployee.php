<!DOCTYPE html>

<html>
<head>
<style>

</style>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    require 'conn.php';

    $e_name_cn=$_POST["e_name_cn"];

    $sql = "SELECT * FROM `employees` WHERE e_name_cn='$e_name_cn'";
        // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);
?>
</body>
</html>
