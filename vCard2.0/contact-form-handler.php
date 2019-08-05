<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['text'];
    $user_subject = $_POST['subject'];


    $mail_form = 'oliver.neller@nord.com';

    $email_subject = 'NEUE EMAIL VON LOCALHOST';

    $email_body = "NAME: $fname $lname. \n".
                    "EMail ADRESSE: $visitor_email. \n".
                        "BETREFF: $user_subject. \n".
                            "NACHRICHT: $message. \n";

    
    $to = "o.neller@web.de";

    $headers = "Form $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>