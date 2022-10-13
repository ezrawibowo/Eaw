<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
   $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'tisu.bekas@gmail.com';
    $mail->Password = 'pltufviasuwneyto';

    $mail->setFrom('tisu.bekas@gmail.com');
    $mail->addReplyTo("$email", "$name");
    $mail->addAddress('tisu.bekas@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "my name is $name, and i want your service.";
    $mail->Body = "$message";
    
    if(!$mail->send()){
        echo 'mailer error: '. $mail->ErrorInfo;
        
        echo "<br> <a href='index.php'>go back.</a>";
    } else{
        header("Location: index.php?mailAlert=sent");
    }
    
}


?>
