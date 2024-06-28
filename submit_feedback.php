<?php
include('config.php');

// Check if form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $name = mysqli_real_escape_string($conn, $_POST['name']); // Sanitize name
  $email = mysqli_real_escape_string($conn, $_POST['email']); // Sanitize email
  $feedback = mysqli_real_escape_string($conn, $_POST['feedback']); // Sanitize feedback
  $rating = $_POST['rating'];

  // Prepare SQL insert statement
  $sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";

  // Attempt to insert data
  if (mysqli_query($conn, $sql)) {
    echo "Thank you for your feedback!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Display error message for debugging
  }

} else {
  // Redirect or display an error message if form is not submitted via POST
  echo "Invalid request.";
}

mysqli_close($conn); // Close connection

?>
