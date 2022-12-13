<?php
// Connect to the database
$db = new mysqli('hostname', 'username', 'password', 'database_name');

// Check for errors
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Delete the record with the id value of 4
$sql = "DELETE FROM users WHERE id = 4";
if (!$result = $db->query($sql)) {
    die('There was an error running the query [' . $db->error . ']');
}

// Commit the deletion
$db->commit();

// Close the database connection
$db->close();
