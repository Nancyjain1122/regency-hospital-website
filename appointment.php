<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name       = $_POST['name'];
    $phone      = $_POST['phone'];
    $gender     = $_POST['gender'];
    $doctor     = $_POST['doctor'];
    $department = $_POST['department'];
    $date       = $_POST['appointment_date'];
    $time       = $_POST['appointment_time'];

    
    $patientEmail = isset($_POST['email']) ? $_POST['email'] : null;

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nancyjain377@gmail.com';
        $mail->Password = 'ateh amom bhea rlxj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

     
        $mail->setFrom('nancyjain377@gmail.com', 'Regency Health Team');
        $mail->addAddress('nancyjain377@gmail.com');
        $mail->Subject = "New Appointment Booking";

        $mail->Body = "New Appointment Details:\n\n" .
                      "Name: $name\n" .
                      "Phone: $phone\n" .
                      "Gender: $gender\n" .
                      "Doctor: $doctor\n" .
                      "Department: $department\n" .
                      "Date: $date\n" .
                      "Time: $time";

        $mail->send();

     
        if ($patientEmail) {
            $mail->clearAddresses();
            $mail->addAddress($patientEmail, $name);
            $mail->Subject = "Appointment Confirmation";

            $mail->Body = "Dear $name,\n\n" .
                          "Your appointment with $doctor has been successfully booked.\n\n" .
                          "📅 Date: $date\n🕓 Time: $time\n🧑 Department: $department\n\n" .
                          "We look forward to seeing you!\n\n- Regency Health Team";

            $mail->send();
        }

        echo "Appointment confirmed";

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
