<?php
function clean_string($string) 
{
 	    $bad = array("content-type","bcc:","to:","cc:","href");
 	    return str_replace($bad,"",$string);
}
$link = @mysql_connect('localhost', 'einnovat_blogger', '!@#admin123');
$dbname = "einnovat_innovation";

mysql_select_db($dbname,$link);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message'])) 
{
    die('We are sorry, but there appears to be a problem with the form you submitted.');       
}
else
{
	$name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email)) 
    {
     	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
     	echo $error_message;
     	die();
   	}
   	$query = "INSERT INTO contact_us(`name`, `email` , `subject`  ,`message` ) VALUES ('$name','$email' ,'$subject' , '$message')";
	mysql_query($query);
 	$email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    
	$email_to = "versitianku@gmail.com,contact@einnovationsystem.com,info@einnovationsystem.com,support@einnovationsystem.com";
 
    $email_subject = "Inquiry of innovation";
    $headers = 'From: '.$email."\r\n".
    $headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n".'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers); 
}


?>