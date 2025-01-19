<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Include database connection file
include('db.php');

// Fetch user data from the database
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>


<!-- Top Panel -->
<div style="display: flex; justify-content: space-between; align-items: center; background-color: #333; color: white; padding: 10px;">
    <div style="display: flex; align-items: center;">
        <a href="index.php">
            <img src="image/LOGO.jpg" alt="Logo" style="height: 50px; margin-right: 10px;">
        </a>
        <h1 style="margin: 0; font-size: 20px;">Gamers Galaxy</h1>
    </div>
    <div>
        <a href="profile.php" style="text-decoration: none; color: white; background-color: #007bff; padding: 5px 10px; border-radius: 5px;">Profile</a>
    </div>
</div>


<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Joined on: <?php echo htmlspecialchars($user['created_at']); ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>