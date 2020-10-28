<?php
session_start();

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="select uname,pass from registration";
if(!$conn)
echo "connection error";
else
$res=$conn->query($sql);
if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{
$x=$row['uname'];
$y=$row['pass'];

if($x==$uname)
{
	if($y==$pass)
	{
		$_SESSION["uname"] = $uname;
		$temp=1;
    }
}
}
}	
if($temp==1)
{
       header("Location:bookroom.php");
}
else 
{	
	echo "plz enter valid username and password ";
	}
	
$conn->close();
?> 