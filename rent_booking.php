<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Rental Booking</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            font-weight: bold;
        }

        input,
        select,
        button {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
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
    <div class="container">
        <h1>Book a Game Rental</h1>
        <form action="process_rent_booking.php" method="POST">
            <label for="user_name">Your Name:</label>
            <input type="text" id="user_name" name="user_name" required>

            <label for="game_name">Game Name:</label>
            <input type="text" id="game_name" name="game_name" required>

            <label for="rental_date">Rental Date:</label>
            <input type="date" id="rental_date" name="rental_date" required>

            <label for="return_date">Return Date:</label>
            <input type="date" id="return_date" name="return_date" required>

            <button type="submit">Book Now</button>
        </form>
    </div>
</body>

</html>