<?php
    include '../server/conn.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mrlonzanida08@gmail.com';
    $mail->Password = 'jietnmizfwflhlbd';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom('mrlonzanida08@gmail.com');
    $name = $fname . " " . $mname . " " . $lname;
    $mail->addAddress($email, $name);
    $mail->Subject = ("UniversityChat");
    $mail->Body = "Thank you $name for successfully signing up on University Chat.";
    $mail->send();

    $conn->close();
?>