<?php



$username="root";
$servername="localhost";
$password="";
$dbname="hotel";

$conn=new mysqli($servername,$username,$password,$dbname);

if( isset($_GET['cancelbooking']))
    {
$checkin=$_GET['cancelbooking'];
}
$sql = "DELETE FROM bookrooom WHERE checkin='$checkin'";
 
    if(!$conn)
echo "connection error";
else
if($conn->query($sql)==true)
{
echo "New record DELETED successfully";
} 
    else
  {             
    echo "Error: ";
}
    
    ?>