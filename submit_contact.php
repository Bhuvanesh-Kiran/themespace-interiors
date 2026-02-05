<?php
session_start();
// submit_contact.php - Handle contact form submissions

// Database configuration
$host = 'bboevqi2xkeo20ii85y1-mysql.services.clever-cloud.com';
$dbname = 'bboevqi2xkeo20ii85y1';
$username = 'un4p0cugzamiuvjb';
$password = 'HA7WKClrUlT2XYpMEwk6';
$port = '3306';

// Initialize response
$response = array();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize and validate input
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    $errors = array();
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($phone)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
        $errors[] = "Phone number must be 10 digits";
    }
    
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        try {
            // Create database connection
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message, created_at) VALUES (:name, :email, :phone, :message, NOW())");
            
            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            
            // Execute the statement
            $stmt->execute();
            
            // Send email notification (optional)
            $to = "info@themespaceinteriors.com";
            $email_message = "You have received a new message:\n\n";
            $email_message .= "Name: " . $name . "\n";
            $email_message .= "Email: " . $email . "\n";
            $email_message .= "Phone: " . $phone . "\n";
            $email_message .= "Message:\n" . $message . "\n";
            $headers = "From: noreply@themespaceinteriors.com";
            
            mail($to,  $email_message, $headers);
            
            // Success response
            $response['success'] = true;
            $response['message'] = "Thank you! Your message has been sent successfully. We'll get back to you soon.";
            
            // Redirect to thank you page
            header("Location: thank_you.php");
            exit();
            
        } catch(PDOException $e) {
            // Database error
            $response['success'] = false;
            $response['message'] = "Sorry, there was an error processing your request. Please try again later.";
            
            // Log error
            error_log("Database Error: " . $e->getMessage());
        }
        
    } else {
        // Validation errors
        $response['success'] = false;
        $response['message'] = implode(", ", $errors);
    }
    
    // If AJAX request, return JSON
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    } else {
        // Regular form submission
        if ($response['success']) {
            header("Location: thank_you.php");
            exit();
        } else {
            $_SESSION['error'] = $response['message'];
            header("Location: contact.php");
            exit();
        }
    }
    
} else {
    // Not a POST request
    header("Location: contact.php");
    exit();
}
?>
