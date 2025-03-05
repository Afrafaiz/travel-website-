<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <?php
 include 'admin_css.php';
 ?>

</head>
<body>
<?php

include 'admin_sidebar.php';

?>

<div class="content">
		
        <h1> Admin Dashboard </h1>


   </div>



    
</body>
</html>