<?php
$servername = "mysql1.cs.clemson.edu";
$username = "wtBldng_8cs2";
$password = "wattBuilding_m70h";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully\n";

// Make my_db the current database
$db_selected = mysql_select_db('wattCenter', $link);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE wattCenter';

  if (mysql_query($sql, $link)) {
      echo "Database my_db created successfully\n";
  } else {
      echo 'Error creating database: ' . mysql_error() . "\n";
  }
}

$sql = "CREATE TABLE Schedule (
RoomID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
BuildingID int NOT NULL AUTO_INCREMENT FOREIGN KEY,
RoomName varchar(255),
Date Date
StartTime TIME
EndTime TIME
updated TIMESTAMP
)"
?>
