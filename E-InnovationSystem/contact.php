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

if(!isset($_POST['skype_id']) ) 
{
    die('We are sorry, but there appears to be a problem with the form you submitted.');       
}
else
{
	$skype_id = $_POST['skype_id']; // required
  
   	$query = "INSERT INTO skype(`skype_id` ) VALUES ('$skype_id')";
	mysql_query($query);
 	$email_message .= "Skype id: ".clean_string($skype_id)."\n";
 
    $email_to = "versitianku@gmail.com,contact@einnovationsystem.com,info@einnovationsystem.com,support@einnovationsystem.com";
	$email = "contact@einnovationsystem.com";
    $email_subject = "Inquiry of innovation";
    $headers = 'From: '.$email."\r\n".
    $headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n".'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers); 
}


?>