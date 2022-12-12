
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Halifax Canoe & Kayak</title>
    
    <style>
        input[type=text] {
          height: 40px;
          width: 200px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        label {
          display: inline-block;
          Margin: 5px;
        }
        input[type=submit] {
          background-color: blue;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: left;
          Margin: 5px;
        }
        .location {
          height: 40px;
          width: 200px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        .container {
          border-radius: 5px;
          padding: 20px;
        }
        .col-25 {
          float: left;
          width: 25%;
          margin-top: 8px;
        }
        .col-75 {
          float: left;
          width: 75%;
          margin-top: 8px;
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

    <h1 style="font-size:30px; text-align:left">Upcoming Adventures</h1><hr>
    <h5 style="text-align:left">Just Some Quick Details</h5>
    
    <form action="thank.php" method="post">
      <div >
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email">
        </div>
      </div>
    
      <div >
        <div class="col-25">
          <label for="location">Location</label>
        </div>
        <div class="col-75">
          <select id="location" name="location">
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
          </select>
        </div>
      </div>
      
      
      <div >
        <div class="col-25">
          <label for="tripdate">Date</label>
        </div>
        <div class="col-75">
          <input style="width:200px; height: 40px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="date" id="tripdate" name="tripdate"> 
        </div>
      </div>
      

      <div >
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>


<script src="index.js"></script>
</body>
</html>


