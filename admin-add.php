<!-- Cleaned up-->
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
          <h1 style="font-size:30px; text-align:left">Admin- Add Adventure</h1><hr>
          <h5 style="text-align:left">Input details about the trip</h5>
    
          <form action="admin-confirm.php" method="POST">
            <div>
              <div class="col-25">
                <label for="heading">Heading</label>
              </div>
              <div class="col-75">
                <input type="text" id="heading" name="heading">
              </div>
            </div>
    
            <div >
              <div class="col-25">
                <label for="date">Date</label>
              </div>
              <div class="col-75">
                <input style="width:200px; height: 40px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="date" id="date" name="tripdate"> 
              </div>
            </div>

            <div >
              <div class="col-25">
                <label for="duration">Duration</label>
              </div>
              <div class="col-75">
                <input type="text" id="duration" name="duration">
              </div>
             </div>

            <div >
              <div class="col-25">
                <label for="summary">Summary</label>
              </div>
              <div class="col-75">
                <input type="text" id="summary" name="summary">
              </div>
            </div>
      
            <div >
              <input type="submit" value="Submit">
            </div>
          </form>
        </main>

        <script src="index.js"></script>

      </body>
    </html>




