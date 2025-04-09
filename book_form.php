<?php

// $connection = mysqli_connect('localhost', 'root','','book_db');

// if(isset($_POST['send'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];
//     $places = $_POST['location'];
//     $guests = $_POST['guests'];
//     $arrivals = $_POST['arrivals'];
//     $leaving = $_POST['leaving'];

//     $request = " insert into book_form(name, email, phone, address,location,guests, arrivals, leaving)
//     values ('$name', '$email', '$phone', '$address', '$location','$guests','$arrivals', '$leaving' )";

//     mysqli_query($connection, $request);
// // alert('booked successfully');
//     header('location:book.php');

// }else{
//     echo 'something went wrong please try again';
// }



$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location=mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location','$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        header('Location: book.php');
        exit();
        
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo 'Something went wrong, please try again';
}

mysqli_close($connection);


?>