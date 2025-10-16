<?php
$to = "fickelt.sight@gmail.com";
$subject = "Test Email from Contact Form";
$message = "This is a test email sent from your contact form.";
$headers = "From: test@creatorsstudio.be";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully to $to";
} else {
    echo "Failed to send test email";
}
?>
