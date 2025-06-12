<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $age = htmlspecialchars(trim($_POST["age"]));
    $contact = htmlspecialchars(trim($_POST["contact"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $xray_type = htmlspecialchars(trim($_POST["xray_type"]));
    $preferred_date = htmlspecialchars(trim($_POST["preferred_date"]));
    $notes = htmlspecialchars(trim($_POST["notes"]));

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nancyjain377@gmail.com';    
        $mail->Password   = 'ateh amom bhea rlxj';       
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

     
        $mail->setFrom('nancyjain377@gmail.com', 'X-Ray Appointment Form');
        $mail->addAddress('nancyjain377@gmail.com'); 

     
        $mail->isHTML(false);
        $mail->Subject = 'New X-Ray Appointment Request';
        $mail->Body    = "Patient Name: $name\nAge: $age\nContact: $contact\nEmail: $email\nX-Ray Type: $xray_type\nPreferred Date: $preferred_date\nNotes: $notes";

        $mail->send();
        echo "success"; 
    } catch (Exception $e) {
        echo "error: {$mail->ErrorInfo}";
    }
}
?>
