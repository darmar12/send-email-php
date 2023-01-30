<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
if(isset($_POST["send"])) {
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'd.ovhare4@gmail.com';
        $mail->Password   = ''; //secret code
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('d.ovhare4@gmail.com');
        $mail->addAddress($_POST["email"]);
    
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["message"];
        $mail->send();
        echo 'Message has been sent';
        echo '<a href="/">Back</a>';
    } catch (Exception $err) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>