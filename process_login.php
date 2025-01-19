<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_username = $_POST['email_or_username'] ?? null;
    $password = $_POST['password'] ?? null;

    // Validate inputs
    if (empty($email_or_username) || empty($password)) {
        die("Please fill in both fields");
    }

    // Check if the user exists
    $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $email_or_username, $email_or_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to homepage
            header("Location: index.php");
            exit();
        } else {
            die("Invalid password.");
        }
    } else {
        die("No user found with that username or email.");
    }

    $stmt->close();
}
$conn->close();
?>
