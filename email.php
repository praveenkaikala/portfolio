<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "praveenkaikala25@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    // Compose and send the email
    mail($to, $subject, $message, $headers);
    echo "message send";

    // Redirect to a thank you page
    header("Location: index.html");
    exit();
}
?>




