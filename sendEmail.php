<?php
    $to_email = "sdhdh2@gmail.com";
    $subject = "Test Email Via PHP";
    $body = "Yo! First time using PHP Scripting to do anything... in this case, it's sending an email :)";
    $header = "From: hendo1349@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo("Email succes to $to_email...");
    }   else {
        echo("Email sending failed...");
    }
?>