<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT eventname,eventdate,eventprice FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "EventName: " . $row["eventname"]. " - EventDate: " . $row["eventdate"]. " " . $row["eventprice"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>