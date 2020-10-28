<?php
$x=$_POST['eventname'];
$y=$_POST['eventdate'];
$z=$_POST['eventprice'];

$username="root";
$servername="localhost";
$password="";
$dbname="hotel";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql = "insert into events (eventname,eventdate,eventprice)
values('$x','$y','$z')";
 
    if(!$conn)
echo "connection error";
else
if($conn->query($sql)==true)
{
echo "New record inserted successfully";
} else
  {
    echo "Error: ";
}

$conn->close();
?>