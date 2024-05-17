<?php
session_start(); 
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

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

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();

        $_SESSION['success'] = 'Your message has been successfully submitted.';
        header('Location: thank-you.php');
        exit();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        $_SESSION['error'] = 'There was an error processing your message. Please try again.';
        header('Location: contact.php');
        exit();
    }
} else {
    $_SESSION['error'] = 'There was a problem with your submission. Please try again.';
    header('Location: contact.php');
    exit();
}
?>
