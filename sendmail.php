<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'config.php';
require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "garagegearsproject@gmail.com";                 
$mail->Password = "gcfzmqohbgtdtkov";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "garagegearsproject@gmail.com";
$mail->FromName = "Grocery Store";

$sql="select * from customer;";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
    $mail->addAddress($row["emailid"], $row["name"]);    
}


$mail->isHTML(true);

$mail->Subject = $_POST["subject"];
$mail->Body = "<h4>Special Discounts for you!</h4><br>Discount:".$_POST['discount']."<br>".$_POST["description"];
//$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
    header('Location:'.'index.php');
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}