<!-- Cleaned up-->
<?php
	//data staging
	$email = $_POST['email'];
	$location = $_POST['location'];
	$tripdate = $_POST['tripdate'];

	// Database connection
	$conn = new mysqli('localhost','root','','halifax');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user_content(email, location, tripdate) values(?, ?, ?)");
		$stmt->bind_param("sss", $email, $location, $tripdate);
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
	<style>
        .container {
          border-radius: 5px;
          padding: 20px;
        }
      </style>
</head>  
	
	<body>
		<div class="navbar">
    		<div id="mySidepanel" class="sidepanel">
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
				<h1 style="font-size:30px; text-align:left">Thank You</h1><hr>
     			Thank You:<?php echo $_POST["email"];?> <br><br>
				We will contact you about the: <br>
    	    	<?php echo $_POST["location"]; ?> 
				trip on the 
				<?php echo $_POST["tripdate"]; ?>
			</div>
		</main>
		<script src="index.js"></script>
	</body>
</html>

