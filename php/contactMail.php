<?php
require 'phpmailer/mail.php';
$mail = new Mail();
            $mail->setFrom("amirbensalem30@gmail.com");
            $mail->addAddress($_POST['inputEmail']);
            $mail->subject($_POST['inputSubject']);
            $mail->body($_POST['inputMessage']);
             $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);
            $mail->send();	

?>