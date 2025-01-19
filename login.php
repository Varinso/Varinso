<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="form-container">
        <!-- Logo and Name -->
        <div class="logo-container">
            <a href="index.php">
                <img src="image/LOGO.jpg" alt="Gamers Galaxy Logo">
            </a>
            <div class="logo-text">Gamers Galaxy</div>
        </div>

        <!-- Login Form -->
        <h2>LOGIN</h2>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="email_or_username">Email or Username</label>
                <input type="text" id="email_or_username" name="email_or_username" class="form-control" placeholder="Enter email or username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center" style="margin-top: 10px;">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</body>

</html>