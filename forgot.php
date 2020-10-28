<?php
session_start();
$name=$_POST['reguname'];
$dob=$_POST['dob'];
$seq=$_POST['seq'];
$ans=$_POST['ans'];
$_SESSION['rname']=$name;
echo $name;
$servername="localhost";
$username="root";
$password="";
$dbname="hotel";
$temp=0;
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select username,dob,seq,ans from users where username='".$name."'";
$result=$conn->query($sql);
if($result->num_rows>0)
while($row=$result->fetch_assoc())   
{
$x=$row['username'];
$y=$row['dob'];
$z=$row['seq'];
$a=$row['ans'];
if($x==$name)
if($y==$dob)
if($z==$seq)
if($a==$ans)
$temp=1;
}
if($temp==1)
header('location:update.html');
else
	echo "plz enter valid details";
$conn->close();
?>