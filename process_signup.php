<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirm_password = $_POST['confirm_password'] ?? null;
    $occupation = $_POST['occupation'] ?? null;

    // Validate terms agreement
    if (!isset($_POST['terms'])) {
        die("You must agree to the terms and conditions.");
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // File upload handling
    $target_dir = "uploads/";
    $id_card_photo = $target_dir . basename($_FILES["id_card_photo"]["name"]);
    if (!move_uploaded_file($_FILES["id_card_photo"]["tmp_name"], $id_card_photo)) {
        die("Error uploading the ID card photo.");
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, occupation, id_card_photo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $hashed_password, $occupation, $id_card_photo);

    if ($stmt->execute()) {
        echo "Sign-up successful!";
        header("Location: login.php");
        exit();
    } else {
        echo "Database Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
