<?php
    $to = 'www.juucini.com';
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $tel = $_POST["tel"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$secondname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>tel: '.$tel.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to,$tel, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
