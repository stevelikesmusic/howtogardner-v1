<?php 
require_once('inc/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
  
  header("Location: contact.php?status=thanks");
  exit;
}

$pageTitle = 'Contact | How to Gardner';
$section = 'contact';
include(ROOT_PATH . 'inc/header.php');

?>
	<div id="main">
		<img src="img/steve.jpg" alt="Photo of Steve Gardner">
		<div class="intro">
			<h1>Let's Make Something</h1>
			<p>A project. A friendship. A plan to take over the world.</p>
			<p>Want to drop me line? I'd love to collaborate on a build. If you'd like, check out some of the <a href="<?php echo BASE_URL . 'projects.php'; ?>">little learning projects</a> I've been working on. Dangling preposition.</p>
			
			<?php
				if (isset($_GET["status"]) && $_GET["status"] == "thanks") { ?>																																														
					<p class="thanks">You're fantastic! I'll get back to you as soon as I can. Thanks for the email.</p>
				<?php } else { ?>		      		  
					<div id='form-area'>
						<form method='post' action='<?php echo ROOT_PATH . "contact.php"; ?> '>
							<input type='text' name='name' id='name' placeholder='Name'>
							<input type='email' name='email' id='email' placeholder='Email'>
							<textarea name='message' id='message' placeholder='Your incredible message'></textarea>
							<input type='text' name='address' id='address' placeholder="Address">
							<button type='submit' name='submit' id='submit'>Send to Steve!</button>
						</form>
					</div>
				<?php } ?>
		</div>
		

<?php include(ROOT_PATH . 'inc/footer.php');
