<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email
    $to = "seema@edgetechnosoft.com";
    $subject = "New message from $name";
    $body = "From: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: sender@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Error sending email";
    }
}
?>
