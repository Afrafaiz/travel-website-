<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "travel";

$data = mysqli_connect($host, $user, $password, $db);

if ($_GET['student_id']) {

    $user_id = $_GET['student_id']; // Add semicolon here

    // Use correct variable in SQL query
    $sql = "DELETE FROM package WHERE id='$user_id'";

    $result = mysqli_query($data, $sql);

    if ($result) {
        header("Location: view_package.php"); // Add semicolon here
        exit(); // It's good practice to add exit() after redirection
    } else {
        echo "Error: " . mysqli_error($data); // Show error if query fails
    }
}
?>
