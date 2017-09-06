<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleResource";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO employee (name,mobile,email,address,personID)
    VALUES ('David','09123456999','c@b','台中市沙鹿區XX路X號','H123091423')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>