<?php
    $username = 'nguyeanhtuatus@gmail.com';
    $password = 'qcsnkzbuhqfqfepo';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'mailer/Exception.php';
    require 'mailer/PHPMailer.php';
    require 'mailer/SMTP.php';

function sendmail($email,$link){
    $mail = new PHPMailer(true);

try {
    global $username;
    global $password;

    $mail ->CharSet = "UTF-8";
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = $username;                     
    $mail->Password   = $password;                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    


    $mail->setFrom('hahalolo@gmail.com', 'HaHaLoLo');
    $mail->addAddress($email);     
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'HaHaLoLo đặt vé máy bay';
    $mail->Body    = 'Click vào đường link để hoàn thành đặt vé <a href="'.$link.'">Click</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    if($mail->send()){
        return true;
    }
    else{
        return false;
    }
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
}
}

?>