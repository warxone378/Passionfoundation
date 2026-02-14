<?php
// Volunteer Form Handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $age = htmlspecialchars($_POST['age']);
    $skills = htmlspecialchars($_POST['skills']);
    $availability = htmlspecialchars($_POST['availability']);
    $interests = htmlspecialchars($_POST['interests']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "volunteer@passionfoundation.org";
    $subject = "New Volunteer Application - Passion Foundation";
    
    // Email content
    $email_content = "New Volunteer Application:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Age: $age\n";
    $email_content .= "Skills: $skills\n";
    $email_content .= "Availability: $availability\n";
    $email_content .= "Interests: $interests\n";
    $email_content .= "Message: $message\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to thank you page
        header("Location: thank-you-volunteer.html");
        exit;
    } else {
        // Error handling
        header("Location: error.html");
        exit;
    }
} else {
    // Not a POST request, redirect to form
    header("Location: contact.html");
    exit;
}
?>