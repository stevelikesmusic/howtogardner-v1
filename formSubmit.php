<?php 
require_once('inc/config.php');

	$name = trim($_POST['name']);	
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message;
	//Get first and last name
	$split_name = explode(" ", $name);
	$first_name = $split_name[0];
	$last_name = $split_name[1];
	echo 'stop';
	exit;

	if ($name == "" || $email == "" || $message == "") {
		exit; 
	}
	
	foreach ($_POST as $value) {
		if (stripos($value, 'Content-Type:') !== FALSE) {
			exit;
		}
	}
				
	if ($_POST['address'] !== "") {
		exit;
	} 			
	
	date_default_timezone_set('Etc/UTC');
	require(ROOT_PATH . 'inc/phpmailer/PHPMailerAutoload.php');

	$mail = new PHPMailer;
	$mail->isSMTP();
	//$mail->SMTPDebug = 2;
	//$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.postmarkapp.com';
	$mail->Port = 25;
	$mail->SMTPAuth = true;
	$mail->Username = '0ad8b56d-2a42-4e69-aa0d-cc1717dd2ca5';
	$mail->Password = '0ad8b56d-2a42-4e69-aa0d-cc1717dd2ca5';
	$mail->setFrom('steve@howtogardner.com', $name);
	$mail->addAddress('gardnersj@gmail.com', 'Steve');
	$mail->Subject = 'HTG Mail | ' . $name;
	$mail->MsgHTML($email_body);

	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
	} 
  
