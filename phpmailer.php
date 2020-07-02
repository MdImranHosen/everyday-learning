<?php
// First Download phpMailer 5.2 then Use
//php mailer 5.2 Bug Fixed 

require ("Path/PHPMailer/PHPMailerAutoload.php");

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPDebug = 0; // Add This line And Bub = 0
 
        $mail->SMTPSecure = 'ssl'; 
        
        $mail->Host = 'domain.com';
        $mail->Port = 465;  
        $mail->Username = 'noreply@domain.com';
        $mail->Password = '@domain.com';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="noreply@domain.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $meg ="Please try Later, Error Occured while Processing...";
            return $meg; 
        }
        else 
        {
            $meg = "Thanks You !! Your email is sent.";  
            return $meg;
        }
    }
    
    $to   = 'imranhosen.csit@gmail.com';
    $from = 'noreply@domain.com';
    $name = 'Md Imran Hosen';
    $subj = 'PHPMailer 5.2 testing';
    $msg = 'This is mail about testing mailing using PHP.';
    
    $error = smtpmailer($to,$from, $name ,$subj, $msg);
    
?>

<html>
    <head>
        <title>PHPMailer 5.2 testing </title>
    </head>
    <body>
        <center><h2 style="padding-top:70px;">
            <?php echo $error; ?></h2></center>
    </body>
    
</html>
