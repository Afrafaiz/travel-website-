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


$sql = "SELECT * FROM package";
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
        <h1>View Pakage</h1>
        <br><br>

        <table  border="1px">
            
            <tr>
            <th style="padding: 20px; font-size:15px;">Name</th>
                <th style="padding: 20px; font-size:15px;">description</th>
                <th style="padding: 20px; font-size:15px;">Image</th>
                <th style="padding: 20px; font-size:15px;">Delete</th>

            </tr>
            <?php
while($info=$result->fetch_assoc())
{

?>
<tr>
<td class="table_td" style="padding: 20px;">


    <?php echo" {$info['name']}"?>

</td>

<td class="table_td" style="padding: 20px;">


 <?php echo" {$info['description']}"?>

 </td>

 <td class="table_td" style="padding: 20px;">


 <img height="100px" width="100px" src="images/<?php echo basename($info['image']); ?>">
 <td class="table_td"><?php echo "<a  onClick = \"javascript:return confirm('Are you shure delete this')\"href='delete.php?student_id={$info['id']}'>Delete</a>"; ?></td>

 </td>
</tr>

<?php
}

?>
</table>
</center>

	</div>





</body>
</html>