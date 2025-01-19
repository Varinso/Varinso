<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "game_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$game_name = $_POST['game_name'];

// Insert data into tournaments table
$sql = "INSERT INTO tournaments_user (user_name, email, game_name) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_name, $email, $game_name);

if ($stmt->execute()) {
    echo "<h1>Enrollment Successful!</h1><p>You have been enrolled in the tournament. Good luck!</p>";
} else {
    echo "<h1>Enrollment Failed</h1><p>There was an error processing your enrollment: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
