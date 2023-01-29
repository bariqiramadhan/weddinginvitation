<?php

	require_once('Rmail.php');

	$body = 'ini bodynya';
	$mail = new Rmail();
	$mail->setSMTPParams('mail.aleysia.id', 26, 'localhost', FALSE, 'no-reply@aleysia.id', ';CKod6N.*QS5');
	$mail->setFrom('Alyesia ID <no-reply@aleysia.id>');
	$mail->setSubject('Verification Account - aleysia.id');
	$mail->setHTML($body);
	$mail->setBcc('fandi@uplinkcreativestudio.net');
	$mail->send(array('fandyfebriant10@gmail.com'),'smtp');

	if($mail->send()){
		echo "kekirim";
	}else{
		echo "tidak kekirim";
	}
		
			
?>