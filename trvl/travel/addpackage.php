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

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_package'])) {
    $t_name = $_POST['name'];
    $t_discription = $_POST['discription'];
    $file = $_FILES['image']['name'];
    $dst = "./image/" . $file;
    $dst_db = "./image/" . $file;

    
    // Insert the teacher's data into the database
    $sql = "INSERT INTO package (name, description, image) VALUES ('$t_name', '$t_discription', '$dst_db')";
    $result = mysqli_query($data, $sql);

    if($result) {
        echo" <script type='text/javascript'>    
        alert(' add sucessfully');
      
      </script>";
    } else {
        echo "Failed .";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style type="text/css">
        .div_deg {
            background-color: #9c169589;
            padding-top: 70px;
            padding-bottom: 70px;
            width: 500px;
        }
    </style>
    <?php include 'admin_css.php'; ?>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>


    <div class="content">
        <center>
            <h1>Add Package</h1><br><br>
            <div class="div_deg">
                <form action ="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <label> Name:</label>
                        <input type="text" name="name">
                    </div>
                    <br>
                    <div>
                        <label>Description:</label>
                        <textarea name="discription"></textarea>
                    </div>
                    <br>
                    <div>
                        <label>Image:</label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="add_package" value="Add package" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
</html>
