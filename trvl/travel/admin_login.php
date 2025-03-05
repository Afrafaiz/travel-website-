<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f7f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .back-btn {
            margin-top: 10px;
            background-color:rgb(49, 98, 141);
        }
        .back-btn:hover {
            background-color:rgb(20, 96, 153);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <!-- Display error message if login fails -->
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<div class="error">Invalid Username or Password!</div>';
        }
        ?>
        <form action="admin_login_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <!-- Back to Home Button -->
        <button class="back-btn" onclick="window.location.href='index.php';">Back </button>
    </div>
</body>
</html>
