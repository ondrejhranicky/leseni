<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "info@lesenikovac.cz";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    mail($to, $subject, $message, $headers);
}
?>
