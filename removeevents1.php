<?php
$eventname=$_POST['eventname'];


$username="root";
$servername="localhost";
$password="";
$dbname="hotel";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql = "DELETE FROM events WHERE eventname='$eventname'";
 
    if(!$conn)
echo "connection error";
else
if($conn->query($sql)==true)
{
echo "New record DELETED successfully";
} else
  {
    echo "Error: ";
}

$conn->close();
?>