<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "nataliogomes707@gmail.com";
$mail->Password = "szdcjhqrycvnleir";

$mail->setFrom($email, $name);
$addr = $_POST['email'];
$myemail = "nataliogomes707@gmail.com";
$mail->addAddress($myemail, "Dave");

$mail->Subject = $subject;
$mail->Body = $message ." " . $email;;


$mail->send();

header("Location: index.html");