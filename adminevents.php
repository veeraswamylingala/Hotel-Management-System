
<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>events</title>
<link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <style>
        .adminbox
{
    margin-top: 40PX;
    margin-left: 180px;
    width: 950px;
    height: 400px;
    border-bottom-style: solid;
    background:rgba(0,0,0,0.7);
        border-style: solid;
        
        
}
.adminbox a
{
    margin-top: 60px;
    margin-left:70px;
	 color:white; 
    font-family: monospace;
    font-size: 20px;
    
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
                
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="viewfeeback.html" style="color:white">VIEW FEEDBACK</a></div> </td></tr>
                
                
     
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="givefeedback.php" style="color:white">GIVE FEEDBACK</a> </div></td></tr></table>
        </div>

         <div class="adminbox">
        
        <a href="adminevents.php"><input type="button" value="EVENTS"></a>
            <a href="bookings.php">        <a href="bookings.php"><input type="button" value="BOOKINGS"></a>
</a>
    
        <a href="offers.php">        <a href="offers.php"><input type="button" value="OFFERS   "></a>
</a>
        
            
        
         
        <div class="adminevents">
            <table style="margin-top:30px;">
                <tr><td>
                    <a href="currentevents.php"><input type="button" value="curentevents"></a></td></tr><tr><td>
                <a href="addevents.php"><input type="button" value="Addevent" ></a></td></tr><tr><td>
                <a href="removeevents.php"><input type="button" value="removeevents" ></a></td></tr></table>
      </div>  
    </div>
                    
        <div class="footer" style="margin-top:200px;">
            <h5> 2k18 VeeTechnology-ALLRIGHTS RESERVED....!</h5>
        </div>
        


            
		 </body>
         </html>