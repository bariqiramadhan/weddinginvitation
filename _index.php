<?php

// if(isset($_POST['save'])){
// 	$save 			= $_POST['save'];
// 	$email 			= $_POST['EMAIL'];
// 	$name 			= $_POST['FNAME'];
// 	$phone 			= $_POST['PHONE'];
// 	require_once('lib/validmail.php');
// 	require 'lib/PHPMailer2/src/SMTP.php';
// 	require 'lib/PHPMailer2/src/PHPMailer.php';

// 	$errorMessage = array();

// 	if(empty($name)) $errorMessage[] = 'Name is required';
// 	if(empty($phone)) $errorMessage[] = 'Phone is required';

// 	if(empty($email)) $errorMessage[] = 'Your Email is required';
// 	else if($email != '' && !validEmail($email)) $errorMessage[] = 'Your Email is not valid';

// 	$smarty->assign('email', $email);
// 	$smarty->assign('name', $name);		
// 	$smarty->assign('phone', $phone);
	

// 	if(count($errorMessage) == 0) 
// 	{
// 		$mail = new PHPMailer;
// 		$mail->isSMTP();
// 		$mail->SMTPDebug  = 0;
// 		$mail->SMTPAuth = true;
// 		$mail->isHTML(true);
// 		$mail->Host = 'mail.mobilebasecamp.net';
// 		$mail->Port = 587;

// 		$mail->Username = '';
// 		$mail->Password = '';

// 		$mail->setFrom('','');
// 		$mail->addAddress('', '');
// 		$mail->addBCC('', '');
// 		$mail->Subject = "";
// 		$mail->Body = $smarty->fetch('_email-contact.tpl');
// 		//Send the message, check for errors
// 		if (!$mail->send()) {
// 		  $smarty->assign('errorMessage', 'Failed');
// 		} else {
// 		  $smarty->assign('success', 'Thank you');
// 		}
// 			$smarty->assign('email', '');
// 			$smarty->assign('name', '');		
// 			$smarty->assign('phone', '');
// 		} else {
// 			$smarty->assign('errorMessage', $errorMessage);
// 		}
// 	}

	$smarty->display("_index.tpl");
?>

