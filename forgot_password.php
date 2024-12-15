<?php
session_start(); 
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];

  // Sanitize input
  $email = mysqli_real_escape_string($conn, $email);

  // Check if email exists in the database
  $sql = "SELECT id FROM users WHERE email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Generate a random password reset token
    $token = bin2hex(random_bytes(32));

    // Store the token in the database (or use a separate table for tokens)
    $sql = "UPDATE users SET reset_token='$token' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
      // Send an email with the reset link
      $to = $email;
      $subject = "Password Reset Request";
      $message = "Click this link to reset your password: http://yourwebsite.com/reset_password.php?token=" . $token;
      mail($to, $subject, $message);

      echo "Password reset email sent. Please check your inbox.";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  } else {
    echo "Email not found.";
  }
}

$conn->close();
?>
