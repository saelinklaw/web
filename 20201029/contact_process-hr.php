<?php

    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];


	$MailText ="\n";
	$MailText .="Name " .$name ."\r\n";
	$MailText .="E-Mail " . $from . "\r\n";
	$MailText .="SubJect " . $subject . "\r\n";
	$MailText .="Message " . $cmessage . "\r\n";




	# 邮件文本 

	$MailTextFile = fopen("/var/www/html/mail-hr.txt","a");
	fwrite($MailTextFile,$MailText);
	fclose($MailTextFile);

?>
