<?php
session start();
$Email=$_POST['Email'];
$seq=$_POST['seq'];
$ans=$_POST['ans'];

$session["Email"]=$Email;

$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select seq,ans from registration where Email="$Email";

if(!$conn)
echo "connection error";
else
$res=$conn->query($sql);

if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{

$se=$row['seq'];
$an=$row['ans'];


if($se==$seq)
{
	if($an==$ans)
	{
		$temp=1;
    }
}
}
}	
if($temp==1)
	header("Location:update.html");
else 
{	
	echo " incorrect answer: plz enter valid answer for the question ";
	}
	
$conn->close();
?> 