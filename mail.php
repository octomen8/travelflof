<?php
    $to = 'mfsnufais714@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subjuct= $_POST["subjuct"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$phone.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>subjuct: '.$subjuct.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $subjuct, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }

?>