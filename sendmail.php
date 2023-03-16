<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPmailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert ='';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

try {
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'muthuvenkateshm80@gmail.com';                     //SMTP username
    $mail->Password   = 'dcsccvrrparhkffh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    

    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('muthuvenkateshm80@gmail.com');     //Add a recipient
   

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hi Muthu Venkatesh! You Received Email Reg- Contact Us';
    $mail->Body = <<<EOT
                Email: {$_POST['email']} <br>
                Name: {$_POST['name']} <br>
                Phone Number: {$_POST['phone']} <br>
                Message: {$_POST['message']}
EOT;
    $mail->send();
    $alert = '<div class="alert-success">
                <span>Message Sent!! Thanks For contacting Us...</span>
            </div>';
} catch (Exception $e) {
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
}
}

?>