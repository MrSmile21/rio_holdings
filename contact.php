<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Basic Validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    // Email Configuration
    // In a real hosting environment, you would configure these settings
    $to = "info@rioholdings.lk"; // Replace with actual company email
    $subject = "New Inquiry from Website: $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    // Send Email
    // Note: mail() requires a configured SMTP server (like Sendmail/Postfix on Linux or XAMPP Mercury/Config on Windows)
    // checking for successful execution

    // For local development demonstration, we simulate success
    // In production, uncomment the if(mail(...)) block

    /* 
    if (mail($to, $subject, $email_content, $headers)) {
        echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Oops! Something went wrong and we couldn't send your message."]);
    }
    */

    // Simulated Success for Demo
    echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent. (Demo Mode)"]);

} else {
    // Not a POST request
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>