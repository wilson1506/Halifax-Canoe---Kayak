<?php
  
  //data staging
	$username = $_POST['username'];
	$p = $_POST['password'];

	$password = password_hash($p, PASSWORD_DEFAULT);
	
  // Database connection
	$conn = new mysqli('localhost','root','','halifax');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(username, password) values(?,?)");
		$stmt->bind_param("ss", $username, $password);
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
			<div action="thankadmin.php" class="container">
				<h1 style="font-size:30px; text-align:left">Thank You</h1><hr>
     			Your new account has been created. Please login
				 <a href="admin-login.php">here:</a>

			</div>
		</main>
		<script src="index.js"></script>
	</body>
</html>

