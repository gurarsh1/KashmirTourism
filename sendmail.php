<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPException;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$conn = new mysqli("localhost","root","","kashmir_db");

if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['price'];
    $p_loc = $_POST['location'];
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_phone= $_POST['c_phone'];
    $c_dot = $_POST['c_dot'];
    $c_nop = $_POST['c_nop'];
    $c_add = $_POST['c_add'];
    $c_requirements = $_POST['c_requirements'];

   
$sql = "INSERT INTO booking_info(p_name,price,location,c_name,c_email,c_phone,c_dot,c_nop,c_add,c_requirements)VALUES('$p_name','$p_price','$p_loc','$c_name','$c_email','$c_phone','$c_dot','$c_nop','$c_add','$c_requirements')";

$conn->query($sql);
echo "booking done!";

    $mail = new PHPMailer(true);

    try{

    $mail->isSMTP();
    $mail->Host= 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'arsh1deep83@gmail.com';
    $mail->Password = 'rzvp arga hwho asbz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($c_email,$c_name);
    $mail->addAddress('arsh1deep83@gmail.com','Admin');

    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission";
    $mail->Body = "
    <h2>Contact Form Details</h2>
    <p><strong>package_name:</strong>$p_name</p>
    <p><strong>package_price:</strong>$p_price</p>
    <p><strong>package_loc:</strong>$p_loc</p>
    <p><strong>customer_name:</strong>$c_name</p>
    <p><strong>customer_email:</strong>$c_email</p>
    <p><strong>customer_phone:</strong>$c_phone</p>
    <p><strong>date of travel:</strong>$c_dot</p>
    <p><strong>number of people:</strong>$c_nop</p>
    <p><strong>customer_address:</strong>$c_add</p>
    <p><strong>additional requirements:</strong>$c_requirements</p>
     ";
     $mail->AltBody = "p_name:$p_name\price: $p_price\np_loc: $p_loc\nc_name:$c_name\nc_email:$c_email\nc_phone:$c_phone\nc_dot:$c_dot\nc_nop:$c_nop\nc_add:$c_add\nc_requirements:$c_requirements";

     if($mail->send()){
        echo "<script>alert('Email sent successfully!'); window.location.href='index.html';</script>";
 }else{
    echo "<script>alert('Email could not be sent !'); window.location.href='index.html';</script>";
 }
}catch(Exception $e){
    echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.location.href='index.html';</script>";
}
}
?>