<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Hihi</title>
    <link rel="stylesheet" href="public/login/css/login.css">
</head>
<body>
    <div class="login-box">
        <img src="frontend/assets/images/user2.png" alt="Logo" class="logo">
        <h2>Login</h2>
        <form action="dashboard.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
