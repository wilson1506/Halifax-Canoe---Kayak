<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="index.css">
    <title>Halifax Canoe & Kayak</title>
    
    
<body>

  <div class="navbar">
    <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.html">Home</a>
      <a href="book.html">Book Trip</a>
      <a href="#">Admin Login</a>
    </div>
  
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    
    <h1 class="logo-heading">Halifax Canoe & Kayak</h1>
  
    <img class="logo" src="Images/paddle-white.png"> 
  
  </div>


  <div class="container">

  <h1 style="font-size:30px; text-align:left">Thank You</h1><hr>
 
    
    Thank You:<?php echo $_GET["email"]; ?><br><br>
    We will contact you about the: <br>
    <?php echo $_GET["location"]; ?> trip on the <?php echo $_GET["date"]; ?>

    


<script src="index.js"></script>
</body>
</html>



