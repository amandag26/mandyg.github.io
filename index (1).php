<?php
	{
		// Prepare Message Body
		$message = "form submitted on: " . date("m/d/Y") . "\n";
		$message .= '\n';
		$message .= "Name: " . $_POST['name'] . "\n";
		$message .= "Email Address: " . $_POST['email'] . "\n\n";
		$message .= "Message: " . stripslashes($_POST['message']);

		//Set up Email Parameters
		$to = "amandagaribay16@gmail.com, <" . $_POST['email'] . ">";
		$subject = $_POST['subject'];
		$headers = "From: " . $_POST['name'] . " " . "<" . $_POST['email'] . ">";

		//Send Email
		mail($to, $subject, $messge, $headers);

		//Redirect user back to contact page
		header("Location: contact.html");

	}
?>