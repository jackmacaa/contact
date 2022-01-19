<?php

$msg = "";
$msgClass = "";

if(filter_has_var(INPUT_POST, 'submit'))
{
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($message))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $toEmail = "jackmaca@msn.com";
            $subject = "Contact Request From " . $name;
            $body = "<h2>Contact request</h2>
                    <h4>Name</h4><p>" . $name . "</p>
                    <h4>Email</h4><p>" . $email . "</p>
                    <h4>Message</h4><p>" . $message . "</p>
                    ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if(mail($toEmail, $subject, $body, $headers))
            {
                $msg = "Email sent";
                $msgClass = "alert-success";
            }
            else
            {
                $msg = "Email was not sent";
                $msgClass = "alert-danger";
            }
        }
        else
        {
            $msg = "Enter valid email";
            $msgClass = "alert-danger";
        }
    }
    else
    {
        $msg = "Fill out all inputs";
        $msgClass = "alert-danger";
    }
}
