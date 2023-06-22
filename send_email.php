<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Create the email content
  $to = "nandish.patel@uwaterloo.ca";
  $subject = "New contact form submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Email sent successfully";
  } else {
    echo "Failed to send email";
  }
}
?>
