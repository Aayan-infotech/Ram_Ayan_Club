<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourName = trim($_POST['yourName']);
    $phoneNumber = trim($_POST['phoneNumber']);
    $startDestination = trim($_POST['startDestination']);
    $endDestination = trim($_POST['endDestination']);
    $passenger = $_POST['passenger'];
    $car = $_POST['car'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $stmt = $conn->prepare("INSERT INTO bookings 
        (yourName, phoneNumber, startDestination, endDestination, passenger, car, start_date, end_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $yourName, $phoneNumber, $startDestination, $endDestination, $passenger, $car, $startDate, $endDate);

    if ($stmt->execute()) {
        $_SESSION['msg'] = [
            "type" => "success",
            "title" => "Submitted Successfully!",
            "text" => "Thank you $yourName! your details for booking were submitted successfully. We will contact you soon."
        ];
    } else {
        $_SESSION['msg'] = [
            "type" => "error",
            "title" => "Booking Failed!",
            "text" => "Something went wrong. Please try again later."
        ];
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit();
}
?>
