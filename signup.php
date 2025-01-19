<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-container">
        <h2>REGISTER</h2>
        <form action="process_signup.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="retype-password">Retype Password</label>
                <input type="password" id="retype-password" name="confirm_password" class="form-control" placeholder="Retype Password" required>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Your Occupation" required>
            </div>
            <div class="form-group">
                <label for="id-card">Upload ID Card Photo</label>
                <input type="file" id="id-card" name="id_card_photo" class="form-control" accept="image/*" required>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="terms" required> Accept the terms and policies
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
        <div class="text-center" style="margin-top: 10px;">
            <p>Already have an account? <a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html>
