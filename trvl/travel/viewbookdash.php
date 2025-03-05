<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}

// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$db = "travel";

// Establish database connection
$data = mysqli_connect($host, $user, $password, $db);

// Check database connection
if (!$data) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to fetch data from the `book_form` table
$sql = "SELECT * FROM book_form";
$result = mysqli_query($data, $sql);

// Check if query execution is successful
if (!$result) {
    die("Error executing query: " . mysqli_error($data));
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>

<?php include 'admin_css.php'; ?>


</head>
<body>

<?php include 'admin_sidebar.php'; ?>

<div class="content">
    <center>
        <h1>Booking</h1>
        <br><br>

        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size:15px;">Name</th>
                <th style="padding: 20px; font-size:15px;">Email</th>
                <th style="padding: 20px; font-size:15px;">Phone</th>
                <th style="padding: 20px; font-size:15px;">Address</th>
                <th style="padding: 20px; font-size:15px;">Location</th>
                <th style="padding: 20px; font-size:15px;">Guests</th>
                <th style="padding: 20px; font-size:15px;">Arrivals</th>
                <th style="padding: 20px; font-size:15px;">Leaving</th>
            </tr>

            <?php
            // Fetch and display records from the result set
            while ($info = $result->fetch_assoc()) {
            ?>
            <tr>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['name']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['email']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['phone']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['address']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['location']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['guests']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['arrivals']); ?></td>
                <td style="padding: 20px;"><?php echo htmlspecialchars($info['leaving']); ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</div>

</body>
</html>
