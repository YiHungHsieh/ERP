<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    // sql to delete a record
    $sql = "DELETE FROM business WHERE id='" . $_GET["id"] . "'";

    mysqli_query($conn,$sql);
    header("Location:../admin-Model/admin_bTrip.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
