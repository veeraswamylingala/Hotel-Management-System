
<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>chefs</title>
<link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .box p
    {
        color:aliceblue;
        font-family: serif;
    }
    .box
{ 
    margin-top: -460px;
    margin-left: 350px;
    width: 670px;
    height: 400px;
     background:rgba(0,0,0,0.7);
    margin-bottom:00px;
}
    
    .box table.table5
{
    margin-top: 0px;

    margin-bottom: 0px;
}
    .box img
{
    width: 130px;
    height: 130px;
}
    .box p
{ 
    text-align: center;
}
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
                    
               
                      
                      
                      </table>
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
    <div style="position:;">
    <img src=".\Im\78.jpg"style="height:100%;width:100%;margin-top:-240px;margin-bottom:0px;">
    
   <center>
    
    <div class="box" style="position:absolute">
       <table class="table5" border="0">
            <tr><td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes. </p></td>
                <td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes.</p></td>
                <td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes.</p></td></tr>
           <tr><td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes.</p></td>
               <td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes.</p></td>
               <td><img src="./im/1.png"><p>NAME:JOHN<br>
                specialized in all dishes.</p></td></tr>
 
        </table>    
            
            </div>
    </center> 
        
                    
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

            
		 </body>
         </html>