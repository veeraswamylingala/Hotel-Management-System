 <?php
session_start();
$x=$_SESSION['uname'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$rooms=$_POST['rooms'];

$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "connection error";

$sql="insert into bookroom (uname,checkin,checkout,rooms)
values('$x','$checkin','$checkout','$rooms')";
 
  
if($conn->query($sql)==true)
{
echo "Registration sucessfull";
header("abc.html");
}
 else
    echo "Error :";

$conn->close();
?>