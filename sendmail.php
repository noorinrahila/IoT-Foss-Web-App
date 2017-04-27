<?php
require 'Mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rahilrasi25@gmail.com';                 // SMTP username
$mail->Password = 'noorin97';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'noorin rahila');
$mail->addAddress('rashidafarhat15@gmail.com');     // Add a recipient

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'ALERT';
$mail->Body    = '<B>SOMEONE TRYING TO ACCESSING UR ACCOUNT</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

