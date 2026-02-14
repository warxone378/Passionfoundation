<?php
// Contact Form Handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "hello@passionfoundation.org";
    $email_subject = "New Contact Form Submission: $subject";
    
    // Email content
    $email_content = "Contact Form Submission:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_content, $headers)) {
        // Redirect to thank you page
        header("Location: thank-you-contact.html");
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