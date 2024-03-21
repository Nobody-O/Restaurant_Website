<?php
session_start(); // Start the session to carry error messages and success messages

include 'includes/config.php'; // Includes your database configuration

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $date = trim($_POST["date"]);
    $time = trim($_POST["time"]);
    $guest_number = trim($_POST["guests"]);
    $special_request = isset($_POST["special_request"]) ? trim($_POST["special_request"]) : "";

    // Basic validation
    if (empty($name)) {
        $_SESSION['error'] = 'Name is required.';
        header('Location: reservation.php');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email format.';
        header('Location: reservation.php');
        exit();
    } elseif (empty($date)) {
        $_SESSION['error'] = 'Date is required.';
        header('Location: reservation.php');
        exit();
    } elseif (empty($time)) {
        $_SESSION['error'] = 'Time is required.';
        header('Location: reservation.php');
        exit();
    } elseif (empty($guest_number) || !is_numeric($guest_number)) {
        $_SESSION['error'] = 'Number of guests is required and must be a number.';
        header('Location: reservation.php');
        exit();
    }

    // Prepare SQL statement to insert form data into the 'reservations' table
    $sql = "INSERT INTO reservations (name, email, date, time, guest_number, special_request) VALUES (:name, :email, :date, :time, :guest_number, :special_request)";
    
    try {
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters to statement
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':guest_number', $guest_number, PDO::PARAM_INT);
        $stmt->bindParam(':special_request', $special_request, PDO::PARAM_STR);
        
        // Execute the statement
        $stmt->execute();

        // Redirect to a thank-you page with success message
        $_SESSION['success'] = 'Your reservation has been successfully submitted.';
        header('Location: thank-you.php');
        exit();
    } catch (PDOException $e) {
        // Log the error and set an error message
        error_log($e->getMessage());
        $_SESSION['error'] = 'There was an error processing your reservation. Please try again.';
        header('Location: reservation.php');
        exit();
    }
} else {
    // Set an error message for requests not using POST
    $_SESSION['error'] = 'There was a problem with your submission. Please try again.';
    header('Location: reservation.php');
    exit();
}
?>
