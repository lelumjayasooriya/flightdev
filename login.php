<?php

$db_host = "localhost"; // Replace with your database server hostname
$db_name = "your_database_name"; // Replace with your database name
$db_user = "your_username"; // Replace with your database username
$db_password = "your_password"; // Replace with your database password

try {
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; // Remove this line in production
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
