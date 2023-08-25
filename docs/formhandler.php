<!-- this is a php file -->
<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// your website name  or domain name
// $email_from = '';

$email_subject = 'New form submission';
$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "Subject : $subject.\n" .
    "User Message: $message.\n";

// where you want to recieve the quarry
$to = "yuvrajbhati00980@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-TO: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

// after submission user will be on the same page
header("Location: contact.html");
// it will not work untill we upload the website on online web hosting

// for hosting the website you have to host in local host server.
// link -- EasyTurtorialsPro.com/hosting.
//  you have to purchase the domain name for that 




?>