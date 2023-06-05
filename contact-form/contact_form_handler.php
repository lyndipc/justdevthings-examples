<?php
require 'phpmailer/PHPMailerAutoload.php';

// Function to sanitize form input
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input));
}

// Create an instance of PHPMailer
$mail = new PHPMailer;

// Configure PHPMailer
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'your_username@example.com';
$mail->Password = 'your_password';
$mail->SMTPSecure = 'tls';

// Validate form fields and handle errors
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate name
    if (empty($_POST['name'])) {
        $nameError = 'Please enter your name.';
    } else {
        $name = sanitizeInput($_POST['name']);
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailError = 'Please enter your email address.';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Invalid email format.';
    } else {
        $email = sanitizeInput($_POST['email']);
    }

    // Validate subject
    if (empty($_POST['subject'])) {
        $subjectError = 'Please enter the subject.';
    } else {
        $subject = sanitizeInput($_POST['subject']);
    }

    // Validate message
    if (empty($_POST['message'])) {
        $messageError = 'Please enter your message.';
    } else {
        $message = sanitizeInput($_POST['message']);
    }

    // Proceed with sending email if there are no validation errors
    if (empty($nameError) && empty($emailError) && empty($subjectError) && empty($messageError)) {
        // Set email details
        $mail->setFrom($email, $name);
        $mail->addAddress('recipient@example.com');
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send the email
        if ($mail->send()) {
            $successMessage = 'Message sent successfully!';
        } else {
            $errorMessage = 'Message could not be sent. Error: ' . $mail->ErrorInfo;
        }
    }
}
?>
