 <?php
session_start();

$x=$_SESSION['uname'];
$event=$_POST['event'];
$start=$_POST['start'];
$end=$_POST['end'];

$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "connection error";

$sql="insert into eventbooking(uname,event,start,end)
values('$x','$event','$start','$end')";
 
  
if($conn->query($sql)==true)
{
echo "booking sucessfull";
header("home.html");
}

 else
    echo "Error :";

$conn->close();
?>