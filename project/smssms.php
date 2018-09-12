

<!doctype html>
<?php
if(isset($_POST['send'])){
	$from = $_POST['femail'];
	$phoneno = $_POST['phoneno'];
	$message = $_POST['message'];
	$carrier = $_POST['carrier'];
	if(empty($from)){
		echo("enter the email");
		exit();
	}else if(empty($phoneno)){
		echo("enter the phone no");
			exit();
	}elseif(empty($carrier)){
		echo("enter the specific carrier");
		exit();
	}elseif(empty($message)){
		echo("enter the message");
		exit();
	}else{
		$message = wordwrap($message, 70);
		$header = $from;
		$subject = 'from submission';
		$to = $phoneno.'@'.$carrier;
		$result = mail($to, $subject, $message, $header);
		echo("message sent to".$to);
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="smsone.php" method="post">
	<table align="center">
		<tr>
			<td>From:</td>
			<td><input type="email" name="femail" placeholder="example@example.com"</td><br>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td><input type="text" name="phoneno" placeholder="enter 10 digit phoneno with country code"</td><br>
		</tr>
		<tr>
			<td>carrier:</td>
			<td><input type="text" name="carrier" placeholder="enter the carrier. ex: vtext.com"</td><br>
		</tr>
		<tr>
			<td>Message:</td>
			<td><textarea rows="6" cols="50" name="message"></textarea></td><br>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="send" name="send"</td>
		</tr>
		
	</table>
</form>
</body>
</html>

smsone.php
Displaying smsone.php.