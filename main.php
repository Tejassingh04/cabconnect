
<?php

include("connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Connect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <link rel="website icon" type="png" href="/logo.png">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
     <img src="logo.png" alt="cab connect logo">
     <h4>your ride, our priority</h4>
    </div>
        <h1>HEY! <?php   
            session_start();
                echo $_SESSION['name'] ;
                echo "<br>"; 
                // echo $_SESSION['email'];
            ?> </h1>
     </nav>

    
     <div id="dialoguebox1" class="dialoguebox1">
        <h3>BOOK YOUR CAB NOW!!</h3>
        <form action="rough1.php" method="post">
            <label for="pickup">PICKUP LOCATION:</label>
            <input type="text" id="pickup" class="pickup" name="pickup" placeholder="enter your pickup location" required><br>
            <label for="pickup">DESTINATION:</label>
            <input type="text" id="destination" class="destination" name="destination" placeholder="enter your destination "required><br>
            <label for="distance">TRAVEL DISTANCE:</label>
           <input type="text" id="distance" class="distance" name="distance" placeholder="enter your distance" required><br>
            <label for="date">TRAVEL DATE:</label>
            <input type="date" id="date" class="date" name="date"  required><br>
            <button type="submit" name="book">BOOK NOW</button>
        </form>
    </div>
    
    <form action="logout.php">
    <button name="logout" type="submit">log out</button>
    </form>

    <footer>
<div id="detail" class="detail">
<div class="aboutus" id="aboutus">
<h3>ABOUT US</h3>
<p>Enjoy your family,office trips with cabconnect,we are best affordable,safe,secure cab servives in M.P.</p>
</div>
<div class="contactus" id="contactus">
<h3> CONNECT WITH US</h3>
<p>9098309011</p>
<p>7067866695</p>
<p>cabconnectmp@gmail.com</p>
</div>
<div class="location" id="location">
<h3>OUR LOCATIONS</h3>
<p>Ground floor mangal city mall,Vijay Nagar,Indore</p>
<p>Second floor,Mahalaxmi complex,Freeganj,Ujjain</p>
</div>
</div>
<hr>
<div class="copyright" id="copyright">
<p> &copy; CabConnect 2025. All rights reserved.</p>
</div>
</footer>
</body>
</html>