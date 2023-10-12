<?php


    $connection = mysqli_connect('localhost', 'root', '', 'voyageventure_db');

    if(isset($_POST['submit_book'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $destination = $_POST['destination'];
        $date = $_POST['date'];
        $travellers = $_POST['travellers'];
        $message = $_POST['message'];

        $request = "INSERT INTO users_book (name, email, phone, destination, date, travellers, message) values ('$name', '
        $email', '$phone', '$destination', '$date', '$travellers', '$message')";

        $result = mysqli_query($connection, $request);

        if ($result) {
        // If the query executed successfully, the booking is successful
        session_start();
        $_SESSION["booking_success"] = true;
        header("Location: book.php"); // Redirect to a success page
        exit();
    }
    } else {
        echo 'Invalid form submission.';
    }
?>




?>