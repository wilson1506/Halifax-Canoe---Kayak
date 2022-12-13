<!-- Cleaned up-->
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
          <div id="mySidepanel" class="sidepanel" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="admin-add.php">Add an Adventure</a>
            <a href="admin-booking.php">Booking Request</a>
            <a href="index.php">Logout</a>
          </div>
          <button class="openbtn" onclick="openNav()">&#9776;</button>
          <h1 class="logo-heading">Halifax Canoe & Kayak</h1>
          <img class="logo" src="Images/paddle-white.png"> 
        </div>

        <main class="container">
          <h1 style="font-size:30px; text-align:left">Admin- Delete an Adventure</h1><hr>
        
          <?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "halifax");

// Check for connection errors
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Select all data from the "employees" table
$result = mysqli_query($db, "SELECT * FROM content");

// Check for query errors
if (!$result) {
    echo "Failed to query the database: " . mysqli_error($db);
    exit();
}

// Print the data in an HTML table
echo "<table>";
echo "<tr><th>ID</th><th>Heading</th><th>Tripdate</th><th>Duration</th><th>Summary</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["heading"] . "</td>";
    echo "<td>" . $row["tripdate"] . "</td>";
    echo "<td>" . $row["duration"] . "</td>";
    echo "<td>" . $row["summary"] . "</td>";
    echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

// Close the connection to the database
mysqli_close($db);
?>

    
        </main>

        <script src="index.js"></script>

      </body>
    </html>




