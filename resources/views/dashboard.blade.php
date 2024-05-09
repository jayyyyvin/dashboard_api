<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link rel="stylesheet" href="login/css/dashboard.css">
    <script>
        const token = localStorage.getItem('token');

        if (!token) {
            window.location.href = '/';
        }
    </script>

</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h1>My Dashboard</h1>
            <ul class="nav-links">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>User Table</h2>
            <button class="add-new-button">Add New</button>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                        <td>Jay Alvin Melgazo</td>
                        <td>ja.melgazo@mlgcl.edu.ph</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        fetch('/api/dashboard', {
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + localStorage.getItem('token') // Added space after 'Bearer'
            }
        })
        .then(res => {
            if (!res.ok) {
                throw new Error('Network response was not ok');
            }
            return res.json();
        })
        .then(data => {
            console.log(data);
            // Handle the data as needed, for example, update the user table
        })
        .catch(error => {
            console.error("There was a problem with your fetch operation:", error);
            // Handle errors, for example, redirect to login page
            window.location.href = '/'; // Redirect to login page
        });
    </script>   
</body>
</html>
