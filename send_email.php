<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "akshata@example.com, manoj123l288@gmail.com"; // Add your and Akshata's email addresses
    $subject = "Valentine's Day Confirmation";
    $message = "I'm thrilled to hear that Akshata said yes! 💖 This marks the beginning of a beautiful journey together, filled with love, joy, and shared experiences. May your days be full of laughter and your hearts brimming with happiness as you navigate the adventures of life hand in hand. Cherish each moment, and may your love continue to grow stronger with each passing day. Congratulations again! 💑💍";

    $headers = "From: manoj123l288@gmail"; // Replace with your email address or use a valid email address

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
