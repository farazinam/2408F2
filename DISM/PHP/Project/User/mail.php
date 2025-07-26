<?php
include("../Admin/connection.php");
session_start();

require '../vendor/autoload.php';

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$getId = $_GET["id"];

if($_SESSION["role"] == null){
    header('location: ../signin.php');
}

$userEmail = $_SESSION["e"];
$customer = $_SESSION["n"];

$sel = "SELECT * FROM image_crud WHERE product_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_assoc($q);
$pn = $fetch["product_name"];
$pp = $fetch["product_price"];
$pd = $fetch["product_description"];

$mail = new PHPMailer(true);

try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';              // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'faraz_inam@aptechnorth.edu.pk';    // Your Gmail address
    $mail->Password = 'tcvi xwih rpuc dbmj';       // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('faraz_inam@aptechnorth.edu.pk', 'Aptech Learning pakistan');
    $mail->addAddress($userEmail, $customer);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "Your Order has been Confirmed!";
    $mail->Body = "
        <h2>Dear {$customer},</h2>
        <p>Your order has been confirmed with the following details:</p>
        <ul>
            <li><strong>Product Name:</strong> {$pn}</li>
            <li><strong>Product Price:</strong> {$pp}</li>
            <li><strong>Product Description:</strong> {$pd}</li>
        </ul>
        <p>Thank you for shopping with us!</p>
    ";

    $mail->send();

    echo "<script>
            alert('Mail Sent');
            window.location.href = 'index.php';
          </script>";
} catch (Exception $e) {
    echo "<script>
            alert('Mailer Error: " . $mail->ErrorInfo . "');
            window.location.href = 'index.php';
          </script>";
}
?>