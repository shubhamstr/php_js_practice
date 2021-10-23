<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once "vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "shubhamsutar5799@gmail.com";
$mail->FromName = "Shubham Sutar";

$mail->addAddress("shubhamsutartesting@gmail.com", "Shubham Sutar");

//Provide file path and name of the attachments
$mail->addAttachment("img1.jpg", "img1.jpg");
// $mail->addAttachment("images/profile.png"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Subject";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}