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

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

$e_name_cn=$_POST["e_name_cn"];

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM `employees` WHERE e_name_cn='$e_name_cn'";
        // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
</body>
</html>
