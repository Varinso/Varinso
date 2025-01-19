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
$booth_type = $_POST['booth_type'];
$booking_date = $_POST['booking_date'];

// Insert data into booths table
$sql = "INSERT INTO booths_user (user_name, booth_type, booking_date) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_name, $booth_type, $booking_date);

if ($stmt->execute()) {
    echo "<h1>Booking Successful!</h1><p>Your booth has been booked. Enjoy your experience!</p>";
} else {
    echo "<h1>Booking Failed</h1><p>There was an error processing your booking: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
