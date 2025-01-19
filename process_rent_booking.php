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
$game_name = $_POST['game_name'];
$rental_date = $_POST['rental_date'];
$return_date = $_POST['return_date'];

// Insert data into rentals table
$sql = "INSERT INTO rentals (user_name, game_name, rental_date, return_date) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $user_name, $game_name, $rental_date, $return_date);

if ($stmt->execute()) {
    echo "<h1>Booking Successful!</h1><p>Your rental has been booked. Enjoy your game!</p>";
} else {
    echo "<h1>Booking Failed</h1><p>There was an error processing your booking: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
