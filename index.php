<?php
$conn = mysqli_connect("localhost", "root", "", "halifax");
$result = mysqli_query($conn, "SELECT * FROM content");
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="index.css">
      <title>Halifax Canoe & Kayak</title>
    </head>
      
      <body>

        <div class="navbar">
          <div id="mySidepanel" class="sidepanel" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="book.php">Book Trip</a>
            <a href="admin-login.php">Admin Login</a>
          </div>
          <button class="openbtn" onclick="openNav()">&#9776;</button>
          <h1 class="logo-heading">Halifax Canoe & Kayak</h1>
          <img class="logo" src="Images/paddle-white.png"> 
        </div>
  
        <main class="container">
        <div class="banner">Come Experience<br>Canada</div>
        <h1>Upcoming Adventures</h1><hr>
        <?php
              while($r = mysqli_fetch_array($result))
              {
              ?>
          
            <div class="activities">
              <h2><?php echo $r['heading']; ?></h2>
                <p>Date: <?php echo $r['tripdate']; ?></p>
                <p>Duration: <?php echo $r['duration']; ?></p>
                <h3>Summary</h3>
                <p><?php echo $r['summary']; ?></p>
            </div>
            <?php
              }
            ?>

        <script src="index.js"></script>
      </body>
  </html>
