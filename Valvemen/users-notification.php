<?php
    $area=$_REQUEST['area'];
    //ya $area='shani peth';
    
    
// Require the PHPMailer library
// require '../vendor/phpmailer/PHPMailer/src/PHPMailer.php';
// require '../vendor/phpmailer/PHPMailer/src/SMTP.php';
// require '../vendor/phpmailer/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';

// Create a new instance of PHPMailer
$mail = new PHPMailer();

// Set up SMTP credentials
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jalsuchna@gmail.com';
$mail->Password = 'cebdrvbvgsttbcya';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up the email message
$mail->setFrom('jalsuchna@gmail.com', 'Jal Suchana');
$mail->Subject = 'Water Notification by Jalsuchana';
$mail->Body = 'Water will be delivered to your house within the next 30 minutes. Thank you for choosing Jalsuchna as your water notifier. 
                We hope you enjoy our service. Save Water, Save Life.';

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'cpp_form');

// Select all users from the user_form table where the area field is 'shani peth'
$query = "SELECT email FROM user_form WHERE `ResidentialArea` LIKE '$area'";
$result = $db->query($query);

// Loop through the results and add each email address to the recipient list
while ($row = $result->fetch_assoc()) {
    $mail->addAddress($row['email']);
}

// Send the email
if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo '<script>alert("Notification sent successfully!");window.location="home.php";</script>';
}

// Close the database connection
$db->close();
?>
