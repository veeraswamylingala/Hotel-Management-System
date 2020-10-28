<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
       <title>home</title>

<link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
           </style>
          </head>
    <body bgcolor="#E5E8E8">
        
        <div class="navbar" style="height:90px;margin-top:0px;background:#000000;margin-left:0px;">
        <img src=".\Im\User_Avatar-05-128.png" style="margin-left:-1100px;  height:80px;
    width:80px;">
        <h1 style=" color: bisque;
    margin-top: -60px;margin-left:-750px;" >HOTEL SABA</h1>
            <div class="right" style="margin-top:-45px;margin-left:760px;">
               
            <a href="home.php"> HOME &ensp;</a>
            <a href="events.php"> EVENTS &nbsp;&nbsp;</a>
          
            <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
    
            <a href="bookroom.php">BOOKROOM &nbsp;&nbsp;</a>
            <?php
            }
        else
        {   
            ?>
              <a href="login.html">BOOKROOM &nbsp;&nbsp;</a>
        <?php
        }   
    
        ?>
                  

        <a href="gallery.php"> GALLERY&nbsp; &nbsp;</a>
     
            <a href="about.php"> ABOUT &nbsp;&nbsp;</a>
    
        
        
        
        <?php
    
       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        { 
        
         echo '<a href="logout.php"><input type="button" value="LOGOUT" style="color:white;padding: 6px 15px;
    background:#000000;margin-top:-8px;"></a>'; 
        }
        else
        {
         echo '<a href="login.html"><input type="button" value="LOGIN" style="color:white;padding: 6px 15px;
    background:#000000;margin-top:-8px;"></a>';
        }   
    
        ?>
    
         
                </div>
        </div><br><br>
   
    
        
<div class="slideshow-container" style="margin-top:-40px; width:1340px;margin-left:0px;margin-right:0px;">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src=".\Im\78.jpg" style="width:100%">
  <div class="text" style="color: black;font-size: 30px;font-family: monospace;font-display: block;font-style: oblique;font-kerning: auto;">Restarent & Bars</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src=".\Im\88.JPG" style="width:100%">
  <div class="text" style="color: black;font-size: 30px;font-family: monospace;font-display: block;font-style: oblique;font-kerning: auto;">Events & meetings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src=".\Im\23.jpg" style="width:100%">
    <div class="text" style="color: black;font-size: 30px;font-family: monospace;font-display: block;font-style: oblique;font-kerning: auto;"><a href="bookroom.php" style="color:white">Rooms & Suits</a></div>
</div>

<a class="prev" onclick="plusSlides(-1)" style=" cursor: pointer;
  position: absolute;
  top: 70%;
  width: auto;
  padding: 16px;
background:rgba(0,0,0,0.7);;
margin-left:0px;
  margin-top: 20px;
  color: WHITE;;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;">&#10094;</a>
<a class="next" onclick="plusSlides(1)" style="cursor: pointer;
  position: absolute;
top: 70%;
  width: auto;
background:rgba(0,0,0,0.7);
  padding: 16px;
    margin-top:20px;
    margin-left:1300px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;">&#10095;</a>

</div>
        <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
            
            
            
            
            
            
            
                   <div class="details" >
            <table  class="table3" border="0" style="top:0px;position:fixed;margin-top:200px;">
            
                
                
                <tr><td> <div class="m1"  style="background:#000000;border-radius:6px;">
                    
                    
                    
         <?php
         if(isset($_SESSION["uname"]))
        {
          ?>
        <a href="mybookings.php" style="color:white">MYBOOKINGS</a>
        <?php
         }
        else
        {
        ?>
        <a href="login.html" style="color:white">MYBOOKINGS</a>
        <?php
        }
        ?>
                    
                    
                    </div></td></tr>
                
                
                
                
                
                
                
                
                
                
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"> <a href="chefs.php" style="color:white;">CHEFSINFO</a></div></td></tr>
                
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="viewfeedback.php" style="color:white">VIEW FEEDBACK</a></div> </td></tr>
                
                <tr><td> <div class="m1"  style="background:#000000;border-radius:6px;">
                    
                    
                    
         <?php
         if(isset($_SESSION["uname"]))
        {
          ?>
        <a href="givefeedback.php" style="color:white">GIVEFEEDBACK</a>
        <?php
         }
        else
        {
        ?>
        <a href="login.html" style="color:white">GIVEFEEDBACK</a>
        <?php
        }
        ?>
                    
                    
                    </div></td></tr>
     
               
                       </table>
        </div>
        
        <center>
        <div class="images">
        <table class="table2" border="0">
      
        <tr><td>
        <div class="viewfeedback">
                <img src="./Im/images.jpg"><br>
            <a href="viewfeedback.php"><input type="button" value="view"></a></div>
            </td>
                <td><div class="contactus">
                    <img src="./Im/contactus.png"><br><a href="about.php">
                    <input type="button" value="contact"></a></div>   </td>       
            <td>
                <div class="chefsinfo"><img src="./Im/chefs.png"><br>
                    <a href="chefs.php"><input type="button" value="view"></a></div></td></tr></table>
        </div>
        </center>
  
         <div class="logos" >
            <table  class="table1" border="0" style="margin-left:100px;margin-top:-80px;">
            
                
                <tr><td><h5 style="color:black;font-style:bold;background:red;"><center>
              <?php
    
       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        {
               ?>
                    <h5 style="color:white;background:red;font-size:14px;">
          
                        <?php  echo $_SESSION['uname'];?></h5>
            <?php
        }
                    ?></center></h5></td></tr>
                
                
                <tr><td><h5 style="color:black"><center>FOLLOW</center></h5></td></tr>
                <tr><td> <a href="https://www.facebook.com/"><img src="./logos/facebook.png" ></a></td></tr>
                <tr><td><a href="https://www.instagram.com/"><img src="./logos/insta.png"></a> </td></tr>
                <tr><td> <a href="https://twitter.com/login?lang=en"><img src="./logos/twitter.png"></a></td></tr>
                <tr><td><a href="https://www.youtube.com/"><img src="./logos/youtube.png"></a> </td></tr></table>
        </div>
  
                    
        <div class="footer">
            <h5> 2k18 VeeTechnology-ALLRIGHTS RESERVED....!</h5>
        </div>
        
        

        
   <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = container1.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>





    
    
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>





 </body>
 </html>
