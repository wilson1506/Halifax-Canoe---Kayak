<!-- Cleaned up-->
<?php
  //data staging
	$heading = $_POST['heading'];
	$tripdate = $_POST['tripdate'];
	$duration = $_POST['duration'];
	$summary = $_POST['summary'];
	
  // Database connection
	$conn = new mysqli('localhost','root','','halifax');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into content(heading, tripdate, duration, summary) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $heading, $tripdate, $duration, $summary);
		$execval = $stmt->execute();
		
		$stmt->close();
		$conn->close();
	}
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
        
        <main>
          <div class="container">
            <h1 style="font-size:30px; text-align:left">Admin-Confirm</h1><hr>
            Data has added successfully to DB <br><br><br><br>
            <h2><a href="index.php">View All Adventures</a></h2>
        </main>
        
        <script src="index.js"></script>
    </body>
 </html>

