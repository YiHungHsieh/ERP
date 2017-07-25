<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "comment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT title,containers FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>$row[title]</h3><hr><p>$row[containers]</p><br>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>