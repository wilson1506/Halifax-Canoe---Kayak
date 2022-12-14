<!-- Cleaned up-->
<?php
 if($_POST)
 {
  $host="localhost";
  $user ="root";
  $pass ="";
  $db ="halifax";

  $username = $_POST['username'];
	$password = $_POST['password'];


  $conn = mysqli_connect($host,$user,$pass,$db);
  $query = "SELECT password FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)==1)
  {
    
    session_start();
    $_SESSION['halifax'] ='true';
    header('location:admin-add.php');

    if (password_verify($password, $data['password'])) {
      
      } else
    $msg = "Please check your inputs!";

  }
  else {echo "<script>alert('wrong username or password or to Signup, please create a new login using the provided form')</script>";}
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
      
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      .button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }
      .button:hover {
        opacity: 0.8;
      }
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
        <h1 style="font-size:30px; text-align:left">Login Form</h1><hr>
      </div>

      <form method="POST">
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <button class="button" type="submit" value="login">Login</button>
        </div>
      </form>
    </main>

    <script src="index.js"></script>
  </body>
</html>



