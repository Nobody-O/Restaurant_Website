<?php
session_start(); // Start the session to carry error messages

// Include database configuration
include 'includes/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Basic validation
    if (empty($name)) {
        $_SESSION['error'] = 'Name is required.';
        header('Location: contact.php');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email format.';
        header('Location: contact.php');
        exit();
    } elseif (empty($message)) {
        $_SESSION['error'] = 'Message is required.';
        header('Location: contact.php');
        exit();
    }

    // Prepare SQL statement to insert form data into the 'contact_messages' table
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
    
    try {
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters to statement
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        
        // Execute the statement
        $stmt->execute();

         // Redirect to a thank-you page with success message
         $_SESSION['success'] = 'Your message has been successfully submitted.';
         header('Location: thank-you.php');
         exit();
         
    } catch (PDOException $e) {
        // Log the error and set an error message
        error_log($e->getMessage());
        $_SESSION['error'] = 'There was an error processing your message. Please try again.';
        header('Location: contact.php');
        exit();
    }
} else {
    // Set an error message for requests not using POST
    $_SESSION['error'] = 'There was a problem with your submission. Please try again.';
    header('Location: contact.php');
    exit();
}
?>
