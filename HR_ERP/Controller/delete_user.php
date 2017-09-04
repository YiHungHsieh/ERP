<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    // sql to delete a record
    $sql = "DELETE FROM `employees` WHERE e_sn='" . $_GET["e_sn"] . "'";

    mysqli_query($conn,$sql);
    header("Location:admin_editEmployee.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
