<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$objet = $_POST['objet'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'creationsayam@gmail.com';
    $mail->Password = 'howj fehk gbcf ecfr'; // Replace with your Gmail app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($email, 'SAYAM');
    $mail->addAddress('creationsayam@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "Objet : " . $objet;
    $mail->Body = "Nom: $nom<br>Email: $email<br>Téléphone: $tel<br>Message: $message";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Le Message a bien été envoyé';
} catch (Exception $e) {
    echo "Le Message n'a pas pu être envoyé. Erreur de l'envoi: {$mail->ErrorInfo}";
}
?>
