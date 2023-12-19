<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $recipient = "banna707@i.ua"; // Replace with your actual email address

    // Set the email subject
    $subject = "New Contact Form Submission";

    // Compose the email message
    $email_content = "Full Name: $fullname\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Send the email
    $headers = "From: $email";
    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "Thank you for submitting the form, $fullname! Your message has been sent.";
    } else {
        echo "Oops! An error occurred while sending the email.";
    }
} else {
    echo "Error: This page should not be accessed directly.";
}
?>