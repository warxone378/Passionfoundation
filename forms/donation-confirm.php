<?php
// Donation Confirmation Handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $amount = htmlspecialchars($_POST['amount']);
    $method = htmlspecialchars($_POST['method']);
    $transaction_id = htmlspecialchars($_POST['transaction_id']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "donations@passionfoundation.org";
    $subject = "Donation Confirmation - Passion Foundation";
    
    // Email content
    $email_content = "Donation Confirmation:\n\n";
    $email_content .= "Donor Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Amount: $$amount\n";
    $email_content .= "Payment Method: $method\n";
    $email_content .= "Transaction ID: $transaction_id\n";
    $email_content .= "Date: $date\n";
    $email_content .= "Message: $message\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send confirmation to donor
    $donor_subject = "Thank you for your donation - Passion Foundation";
    $donor_message = "Dear $name,\n\nThank you for your generous donation of $$amount to Passion Foundation.\n\nWe appreciate your support in helping us make the world a better place through education and food aid programs.\n\nBlessings,\nPassion Foundation Team";
    
    // Send emails
    if (mail($to, $subject, $email_content, $headers) && 
        mail($email, $donor_subject, $donor_message)) {
        // Redirect to thank you page
        header("Location: thank-you-donation.html");
        exit;
    } else {
        // Error handling
        header("Location: error.html");
        exit;
    }
} else {
    // Not a POST request, redirect to form
    header("Location: donate.html");
    exit;
}
?>