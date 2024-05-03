<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Hihi</title>
    <link rel="stylesheet" href="login/css/login.css">
</head>
<body>
    <div class="login-box">
        <img src="login/css/images/user2.png" alt="Logo" class="logo">
        <h2>Login</h2>
        <form id="loginFormElement" action="#" method="POST">
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
        <p id="message"></p>
        <p>Don't have an account? <a href="register.php">Register Here!</a>.</p>
    </div>  

    <script>
        document.getElementById('loginFormElement').addEventListener('submit', function(event) {
            event.preventDefault();

            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            var data = {
                email: email,
                password: password,
            };

            fetch("/api/login", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                body: JSON.stringify(data),
            })
            .then((res) => {
                return res.json();
            })
            .then(data => {
                console.log(data);
                if (data.access_token) {
                    localStorage.setItem('token', data.access_token);
                    window.location.href = '/dashboard';
                } else {
                    document.getElementById('message').innerText = data.message;
                    document.getElementById('message').style.color = 'red';
                }
            })
            .catch(error => {
                console.error("Something went wrong with your fetch!", error);
            });
        });
    </script>
</body>
</html>
