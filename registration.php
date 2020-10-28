<?php

$uname=$_POST['uname'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phonenum=$_POST['phonenum'];

if(strlen($pass)<8)
   
{
    echo"password should be in 8 or more characters";
}
    else
{
$username="root";
$servername="localhost";
$password="";
$dbname="hotel";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO registration 
VALUES ('$uname','$gender','$nationality','$email','$pass','$phonenum')";
 
    if(!$conn)
echo "connection error";
else
if($conn->query($sql)==true)
{
echo "New record created successfully";
} else
  {
    echo "Error: ";
}
}
$conn->close();
?>