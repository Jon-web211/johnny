<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from= 'Info@johnnyphoto.com';

$email_subject= 'New Form Submission'

$email_body= "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to='jonathanguarda1@gmail.com';

$hearders= "from: $email_from \r\n";

$hearders .="Reply-To: $visitor_email\r\n"


mail($to,$email_subject,$email_body,$headers)

header("location:contact.html")

?>