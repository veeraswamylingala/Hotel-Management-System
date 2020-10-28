
<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>AdminBookings</title>
<link rel="stylesheet" href="admin.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </head>
    
<body background="" >
    <form methos="post" action="admin.php">

        <div class="container">
        <img src=".\Im\User_Avatar-05-128.png">
        <h1>HOTEL SABA</h1>
         <h3><?php
        //if($_SESSION["uname"])
           //if(!isset($_SESSION["uname"]))

       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        { ?>
        <h4 >   
    <?php  echo $_SESSION['uname'];?></h4>
        
        <a href="logout.php"> 
            <?php echo "LOGOUT";?></a>
        <?php
              
           
         
        }
        else
        {
         echo '<a href="login.html">LOGIN</a>';
        }   
    
        ?>
            </h3>
        <br>
        <br>
        <br></div>
    
    
        <div class="container1">
            <a href="home.html"> HOME</a>
            <a href="events.html"> EVENTS </a>
        <a href="login.html"> BOOKROOM</a>
        <a href="gallery.html"> GALLERY</a>
     
            <a href="about.html"> ABOUT</a>
                </div>

    <div class="adminbox">
        
        <a href="adminevents.html">EVNETS</a>
            <a href="adminbookings.html">BOOKINGS</a>
        
          <a href="offers.html">OFFERS</a>    

        
                
       <?php
$link = mysqli_connect("localhost", "root", "", "hotel");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM bookroom";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        echo "<table>";
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>checkin</th>";
                echo "<th>checkout</th>";
                 echo "<th>rooms</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['uname'] . "</td>";
                echo "<td>" . $row['checkin'] . "</td>";
                echo "<td>" . $row['checkout']. "</td>";
                echo "<td>" . $row['rooms']. "</td>";
                  
              }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
      
        
    </div>
    

        
        
        
        
        
        
        
        
        
     
    
    
    
    
    
           

     </form>


 </body>
 </html>