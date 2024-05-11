<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link rel="stylesheet" href="login/css/dashboard.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                <li><a href="#" onclick="logout()"><i data-feather="grid"></i><span>Logout</span></a></li>
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
                <tbody id = 'tableBody'>
                    <tr>
                        
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
   
   
   
   
   <script>
    
    function logout()
    {
        swal({
  title: "Are you sure?",
  text: "You want to logout?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    localStorage.removeItem('token');
    window.location.href = '/';
  }
});
    }

    
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
