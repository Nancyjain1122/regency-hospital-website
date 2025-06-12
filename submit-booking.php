<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service_type = htmlspecialchars(trim($_POST['service_type'] ?? ''));
    $note = htmlspecialchars(trim($_POST['note'] ?? ''));

    $pickup_location = htmlspecialchars(trim($_POST['pickup_location'] ?? ''));
    $ambulance_type = htmlspecialchars(trim($_POST['ambulance_type'] ?? ''));
    $preferred_date = htmlspecialchars(trim($_POST['preferred_date'] ?? ''));
    $preferred_time = htmlspecialchars(trim($_POST['preferred_time'] ?? ''));

    $message = "New Service Booking Request\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Service Type: $service_type\n";

    switch ($service_type) {
        case 'ambulance':
            $message .= "Pickup Location: $pickup_location\n";
            $message .= "Ambulance Type: $ambulance_type\n";
            break;

        case 'ct_scan':
        case 'xray':
        case 'ultrasound':
        case 'operation':
        case 'physiotherapy':
        case 'echocardiograms':
        case 'Pathology Lab':
            $message .= "Preferred Date: $preferred_date\n";
            $message .= "Preferred Time: $preferred_time\n";
            break;
    }

    $message .= "Additional Notes: $note\n";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nancyjain377@gmail.com';       
        $mail->Password   = 'ateh amom bhea rlxj';        
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('nancyjain377@gmail.com', 'Medical Booking System');
        $mail->addAddress('nancyjain377@gmail.com');

        $mail->isHTML(false);
        $mail->Subject = "New Booking: " . ucfirst(str_replace('_', ' ', $service_type));
        $mail->Body    = $message;

        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "error: {$mail->ErrorInfo}";
    }
}
?>
