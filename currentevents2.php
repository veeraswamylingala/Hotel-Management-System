<?php
$link = mysqli_connect("localhost", "root", "", "hotel");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM events";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        echo "<table>";
            echo "<tr>";
                echo "<th>eventname</th>";
                echo "<th>eventdate</th>";
                echo "<th>eventprice</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['eventname'] . "</td>";
                echo "<td>" . $row['eventdate'] . "</td>";
                echo "<td>" . $row['eventprice']. "</td>";
              }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>