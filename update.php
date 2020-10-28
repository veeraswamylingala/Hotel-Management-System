<?php

$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];

if($pwd==$pwd1)
{
$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="update registration set $pass='$pwd' where $email='$email';

if(!$conn)
echo "connection error";
else
$res=$conn->query($sql);

if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{

$se=$row['seq'];
$an=$row['answer'];


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
$session_close();
?> 