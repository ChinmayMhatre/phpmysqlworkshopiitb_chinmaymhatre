<!DOCTYPE html>
<html>
<head>
	<title>Feedback form</title>
</head>
<body>
<form action="" method="POST">
	<p>
		Name: 
		<input type="text" name="name"><br>
	</p>
	<p>
		Email: 
		<input type="text" name="email"><br>
	</p>
	<p>Feedback: </p>
	<textarea name="feedback"></textarea><br>
	
	<input type="submit" name="submit"><br>
<?php 
if($_POST['submit']){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	if ($name&&$email) {
		$from= "chinmaymhatre12@gmail.com";
		$subject="Feedback form";
		$headers="From:".$from;
		$message="thank you for your feedback";
		
		$send = mail($email, $subject, $message);
		$admin= "chinmaymhatre12@gmail.com";
		$subjectadmin="$name Details";
        $headersadmin="From : $name ,$email";
        $bodyadmin="Name : ".$name."\n Email : ".$email."\n Feedback : ".$feedback;
        mail($admin,$subjectadmin,$bodyadmin,$headersadmin);
		if( $send == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
	}
	else
		echo "error";
}


?>

</form>
</body>
</html>