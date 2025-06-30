<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "kiranmrp1310@gmail.com";
    $subject = "New Contact Inquiry from " . $_POST['name'];
    $message = "Name: " . $_POST['name'] . "\n"
             . "Email: " . $_POST['email'] . "\n"
             . "Service: " . $_POST['service'] . "\n"
             . "Budget: " . $_POST['budget'] . "\n"
             . "Message:\n" . $_POST['message'];
    $headers = "From: " . $_POST['email'];
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}
?>