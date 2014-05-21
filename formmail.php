<?php
//This is the formmailer for Firecane.com
//This are general settings
session_start();
$hosts = array('www.craigsteelman.com','craigsteelman.com');  //Host that are allowed to send mail
$subject = "crs.com email form";  //Subject of email
$from = "DO NOT REPLY<sales@firecane.com>"; //Email From
//$to = "support@nolawebmasters.com"; //Email 
$to = "larrytheliq@yahoo.com";
//$to = "firecane1@yahoo.com";
$thank_you = 'thank_you.php'; //Page redirect on success


//This checks for the host and dumps you to the error page if host not reconized;
$my_check = false;
foreach ($hosts as $value) {
	if($_SERVER['HTTP_HOST']== $value) $my_check=true;
}

//if(!$my_check) {
//	$_SESSION['msg'] = "Your host was not reconized as an allowed host for submiting mail from this serer";
//	header('Location: error.php');	
 //   exit();	
//}

//This builds the mail
$my_time = date('m-d-Y h:i:s');
$message = "<b>Remote Address:</b> $_SERVER[REMOTE_ADDR] <br>\n
            <b>Date/Time:</b> $my_time<br>\n";

foreach ($_POST as $key=>$value) {
	$message .= "<b>$key:</b> $value <br> \n";
}

$headers = "From: $from\r\n" .
       'X-Mailer: PHP/' . phpversion() . "\r\n" .
       "MIME-Version: 1.0\r\n" .
       "Content-Type: text/html; charset=utf-8\r\n" .
       "Content-Transfer-Encoding: 8bit\r\n\r\n";

// Send
$result=mail($to, $subject, $message, $headers);
//See if mail was sent
if($result) {
	header("Location: $thank_you");
	die();	
}
  else {
  	$_SESSION['msg'] = "Your host was not reconized as an allowed host for submiting mail from this serer";
	header('Location: error2.php');	
  }
