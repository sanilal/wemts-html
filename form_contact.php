<?php
ob_start();
error_reporting(0);
/* Set e-mail recipient */
$myemail  = "info@wemts.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['fname'], "Enter your name");
$email    = check_input($_POST['email']);
$telephone  = check_input($_POST['phone']);
$comments = check_input($_POST['message'], "Write your message");
$subject = check_input($_POST['subject']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    echo ("E-mail address not valid"); exit;
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

contact form has been submitted by:<br/>

Name: $name <br/>
E-mail: $email <br/>
Telephone: $telephone <br/>
Subject: $subject <br/>
Comments:
$comments <br/>

End of message
";
$headers  = "MIME-Version:1.0 \r\n";
$headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
$headers  .= "From: no-reply@wemts.com\r\n";
/* Send the message using mail() function */
$mail=mail($myemail, $subject, $message,$headers);

/* Redirect visitor to the thank you page */
if($mail){
	echo 'success';
}

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        echo ($problem); exit;
    }
    return $data;
}

?>