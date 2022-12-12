
<?php
/*
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname ="halifax";
	
	// Database connection
	if(!$con = mysqli_connect($dbhost, $dbuser, $dbname ))
    {
        die("failed to connect!");
    }
*/
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="index.css">
    <title>Halifax Canoe & Kayak</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}




span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>



    
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



  <div class="container">

    <h1 style="font-size:30px; text-align:left">Login Form</h1><hr>
    
    
  </div>



<form action="admin-add.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    
  </div>

  
</form>


<script src="index.js"></script>
</body>
</html>
