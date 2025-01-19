<?php


require_once 'db.php'; // Database connection

// Fetch booths from the database
$query = "SELECT * FROM booths";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Booths</title>
    <link rel="stylesheet" href="styles.css">
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
    <header>
        <div class="logo">Gaming Booths</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="rental.php">Rent Games</a>
            <a href="tournaments.php">Tournaments</a>
            <a href="profile.php">Profile</a>
        </nav>
    </header>
    <div class="container">
        <h1>Book a Gaming Booth</h1>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>


            <div class="booth">
                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                <p>Location: <?php echo htmlspecialchars($row['location']); ?></p>
                <p>Available Slots: <?php echo htmlspecialchars($row['available_slots']); ?></p>
                <form action="booth_booking.php" method="GET">
                    <input type="hidden" name="booth_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                    <button type="submit">Book Now</button>
                </form>
            </div>

        <?php } ?>
    </div>

</body>

</html>