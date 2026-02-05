<?php
// submit_quote.php - Handle quote form submissions

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
    $package = isset($_POST['package']) ? trim($_POST['package']) : '';
    
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
    
    if (empty($package)) {
        $errors[] = "Please select a package";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        try {
            // Create database connection
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO quotes (name, email, phone, package, created_at) VALUES (:name, :email, :phone, :package, NOW())");
            
            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':package', $package);
            
            // Execute the statement
            $stmt->execute();
            
            // Send email notification (optional)
            $to = "info@themespaceinteriors.com";
            $subject = "New Quote Request from " . $name;
            $message = "You have received a new quote request:\n\n";
            $message .= "Name: " . $name . "\n";
            $message .= "Email: " . $email . "\n";
            $message .= "Phone: " . $phone . "\n";
            $message .= "Package: " . $package . "\n";
            $headers = "From: noreply@themespaceinteriors.com";
            
            mail($to, $subject, $message, $headers);
            
            // Success response
            $response['success'] = true;
            $response['message'] = "Thank you! Your quote request has been submitted successfully. We'll contact you soon.";
            
            // Redirect to thank you page
            header("Location: thank_you.php");
            exit();
            
        } catch(PDOException $e) {
            // Database error
            $response['success'] = false;
            $response['message'] = "Sorry, there was an error processing your request. Please try again later.";
            
            // Log error (in production, log to file instead of displaying)
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
        // Regular form submission - redirect or display message
        if ($response['success']) {
            header("Location: thank_you.php");
            exit();
        } else {
            $_SESSION['error'] = $response['message'];
            header("Location: index.php");
            exit();
        }
    }
    
} else {
    // Not a POST request
    header("Location: index.php");
    exit();
}
?>
