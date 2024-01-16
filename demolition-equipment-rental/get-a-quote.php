<?php
ob_start();
error_reporting(0);
/* Set e-mail recipient */
$myemail  = "info@wemts.com";

/* Check all form inputs using check_input function */
$option = check_input($_POST['option']);
$name = check_input($_POST['name'], "Enter your name");
$email    = check_input($_POST['email']);
$telephone  = check_input($_POST['tel']);
$location = check_input($_POST['location']);
$project = check_input($_POST['project'], "Tell us about your project");
$subject = "Quote request for".$option."Submited by".$name;

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    echo ("E-mail address not valid"); exit;
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Quote request form has been submitted by:<br/>

Name: $name <br/>
E-mail: $email <br/>
Telephone: $telephone <br/>
Product: $option <br/>
Location: $location <br/>
Project: $project <br/>

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