
<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>bookroom</title>
<link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </head>
    
<body bgcolor="#E5E8E8">
    
<form method="post" action="bookroom1.php">


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
    

           

         
   
		
        
	
    
                  <div class="details">
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
                
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="viewfeeback.html" style="color:white">VIEW FEEDBACK</a></div> </td></tr>
                
                
     
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="givefeedback.php" style="color:white">GIVE FEEDBACK</a> </div></td></tr></table>
        </div>


    <div class="logos" >
            <table  class="table1" border="0" style="margin-left:30px;margin-top:-80px;">
            
                
                <tr><td><h5 style="color:black;font-style:bold;background:red;"><center>
              <?php
    
       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        {
               ?>
                    <h5 style="color:white;background:red;font-size:14px;">
          
                        <?php 
                if($_SESSION['uname']=='Admin')
                {?>
                        <a href="admin.php">
                            <?php
                    echo $_SESSION['uname'];?></a>
                <?php
                        }
                        else
                        {
                        echo  $_SESSION['uname'];
                        
                        }
        }
                        ?></h5></center></h5></td></tr>
                
                
                <tr><td><h5 style="color:black"><center>FOLLOW</center></h5></td></tr>
                <tr><td> <a href="https://www.facebook.com/"><img src="./logos/facebook.png" ></a></td></tr>
                <tr><td><a href="https://www.instagram.com/"><img src="./logos/insta.png"></a> </td></tr>
                <tr><td> <a href="https://twitter.com/login?lang=en"><img src="./logos/twitter.png"></a></td></tr>
                <tr><td><a href="https://www.youtube.com/"><img src="./logos/youtube.png"></a> </td></tr></table>
        </div>
    <div style="position:;">
    <img src=".\Im\78.jpg"style="height:100%;width:100%;margin-top:-240px;margin-bottom:0px;">
    
    

<div class="div" style="width:450px;
    height: 370px;
    margin-top: -480px;
     margin-left: 690px;
	 background:rgba(0,0,0,0.7);
     border-radius: 5px;
     text-align: center;position:absolute;">
				<br>
				<h2 style="margin-top:20px;
	color:white;">BOOK YOUR ROOM</h2>
				<h4 style="margin-top:20px;
	color:red;
">Signin Before Booking</h4>
    <table border=0 style="text-align: center;
color:white;
width: 150px;
    height: 38px;
    margin-bottom: 20px;
    font-size: 17px;
    border;1px solid #000;
    padding-left: 105px;">
				<tr>
				<td>CHECKIN</td><td><input type="date" name="checkin" placeholder="CHECKIN" required></td><br></tr>
				<tr><td>CHECKOUT</td><td><input type="date" name="checkout" placeholder="CHECKOUT"required></td><br></tr>
				<tr><td>ROOMS</td><td><input type="int" name="rooms" placeholder="ROOMS "required></td><br></tr>
				
				</table>
				 <input type="submit" value="BOOKROOM" style=" padding: 10px 15px;
    background: #150;
    color: #ffff;
    border: none;
    margin-bottom: 10px;
    cursor: poniter;
border;1px solid #0000;">				</div>
        
                    
        <div class="footer" style="margin-top:200px;">
            <h5> 2k18 VeeTechnology-ALLRIGHTS RESERVED....!</h5>
        </div>
        
 
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

    </div>
    </form>
		 </body>
         </html>