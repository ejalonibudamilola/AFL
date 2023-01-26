<?php
	$mname = $_POST['mname'];
	$location = $_POST['location'];
	$mdate =$_POST['mdate'];
	$number =$_POST['number'];
	$visitor_email = $_POST['email'];

	$email_from = 'admin@apostlefemilazarusministries.com';
	$email_subject = "Invitation Mail";
	$email_body = "Ministry Name: $mname.\n".
					"Location: $location.\n".
					"Meeting Date: $mdate.\n".
					"Phone Number: $number.\n";
					"Email: $visitor_email.\n".

	$to = "invitations@apostlefemilazarusministries.com";
	$headers = "Reply-To: $visitor_email \r\n";

	$sendmail = mail($to, $email_subject, $email_body, $headers);

	if($sendmail){
		echo "Thank you, Your message has been sent.";
	}
	else{
		echo "Your message was not successfully sent, please try sending again";	
	}
?>
