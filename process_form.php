<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Send email (you need to configure your mail server for this)
    $to = "assaypoulose16@gmail.com";
    $subject = "New Contact Form Submission";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Use mail() function to send email (configure your server's mail settings)
    mail($to, $subject, $email_message);

    // Optionally, you can redirect the user after submission
    header("Location: thank_you.html");
    exit();
}

?>
