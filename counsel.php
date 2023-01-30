<?php
	$fname = $_POST['fname'];	
	$phone =$_POST['phone'];

	$email_from = 'admin@apostlefemilazarusministries.com';
	$email_subject = "Counselling Mail";
	$email_body = "Name: $fname.\n".
					"Phone Number: $phone.\n";

	$to = "counsel@apostlefemilazarusministries.com";

	$sendmail = mail($to, $email_subject, $email_body);

	if($sendmail){
		echo "Thank you, Your message has been sent.";
	}
	else{
		echo "Your message was not successfully sent, please try sending again";	
	}
?>
