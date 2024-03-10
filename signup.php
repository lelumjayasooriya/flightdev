<?php

require_once('db_connect.php'); // Include database connection

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['signup-password'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Validate email (optional)

  $hashed_password = password_hash($_POST['signup-password'], PASSWORD_DEFAULT); // Hash password

  $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':username', $name); // Consider using a unique username field instead of name for login
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $hashed_password);

  if ($stmt->execute()) {
    echo "Signup successful!";
  } else {
    echo "Error: " . $conn->errorInfo()[1]; // Get error message (remove in production)
  }
}

?>

<form method="post" action="signup.php">
  <button type="submit">Signup</button>
</form>

