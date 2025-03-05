<?php
$connection = mysqli_connect('localhost', 'root', '', 'travel');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
    
    if (mysqli_query($connection, $request)) {
        echo "<script>
                alert('Room booked successfully.');
                window.location.href='book.php';
              </script>";
    } else {
        echo "<script>
                alert('Something went wrong, please try again!');
                window.location.href='book.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Invalid request!');
            window.location.href='book.php';
          </script>";
}
?>
