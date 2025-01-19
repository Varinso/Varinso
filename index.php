<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Platform</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #000000;
            color: #fff;
            padding: 1rem;
        }

        header img {
            height: 70px;
            margin-right: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
            background-color: #f8f8f8;
            padding: 0.5rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            background-color: #555;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #666;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .section {
            margin-bottom: 2rem;
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <!-- Logo and Title -->
<div style="display: flex; align-items: center;">
    <a href="index.php">
        <img src="image/LOGO.jpg" alt="Logo">
    </a>
    <h1>Gamers Galaxy</h1>
</div>
    </header>
    <nav>
        <a href="rental.php">Game Rentals</a>
        <a href="booths.php">Booth Bookings</a>
        <a href="tournaments.php">Tournaments</a>
    </nav>
    <div class="container">
        <div class="section">
            <h2>Game Rentals</h2>
            <p>Browse and rent the latest games. Click below to start exploring.</p>
            <a href="rental.php" class="btn">Explore Rentals</a>
        </div>
        <div class="section">
            <h2>Booth Bookings</h2>
            <p>Reserve gaming booths for an amazing gaming experience. Click below to book now.</p>
            <a href="booths.php" class="btn">Book a Booth</a>
        </div>
        <div class="section">
            <h2>Tournaments</h2>
            <p>Join exciting tournaments and compete with the best. Enroll now to participate.</p>
            <a href="tournaments.php" class="btn">Enroll in Tournaments</a>
        </div>
    </div>

    <!-- User Profile Info Tab -->
    <div style="position: fixed; top: 60px; right: 10px;">
        <a href="profile.php" style="text-decoration: none; color: #fff; background: #007bff; padding: 10px 15px; border-radius: 5px;">
            Profile
        </a>
    </div>

</body>

</html>