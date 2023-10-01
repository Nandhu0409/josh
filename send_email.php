<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email recipient
    $to = "nandhagopal04092000@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
