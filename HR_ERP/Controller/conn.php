<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
