<?php
// Include database configuration
include 'includes/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Basic validation (for example purposes only)
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        // Redirect back to contact form with an error message
        // In a real application, you might want to use a more user-friendly error reporting system
        echo "Please fill out the form correctly.";
        exit;
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

        // Redirect to a new page or display a success message
        echo "Thank you for contacting us. We will be in touch soon.";
    } catch (PDOException $e) {
        // Handle potential errors here
        die("Error: " . $e->getMessage());
    }
} else {
    // Not a POST request
    echo "There was a problem with your submission. Please try again.";
}
?>
